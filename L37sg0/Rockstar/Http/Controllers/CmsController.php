<?php

namespace L37sg0\Rockstar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use L37sg0\Rockstar\Models\Attribute;
use L37sg0\Rockstar\Models\Block;
use L37sg0\Rockstar\Models\Page;

class CmsController extends Controller
{
    public function indexPages()
    {
        $pages = Page::all();
        return view('rockstar::cms.page.index', compact('pages'));
    }

    public function createPage() {
        return view('rockstar::cms.page.create');
    }

    public function storePage(Request $request) {
        $page = new Page();
        $page->fill([
            Page::FIELD_TITLE => $request->input(Page::FIELD_TITLE),
            Page::FIELD_URL => $request->input(Page::FIELD_URL),
            Page::FIELD_VIEW => $request->input(Page::FIELD_VIEW),
            Page::FIELD_ACTIVE => $request->input(Page::FIELD_ACTIVE)
        ])->save();

        // attach attributes to page
        $attributes = $request->input('attributes');
        foreach ($attributes as $key => $value) {
            $page->attributes()->attach($key, ['value' => $value]);
        }

        return redirect()->route('dashboard.pages')->with('success', 'Page created successfully.');
    }

    public function editPage(Page $page) {
        $page = Page::findOrFail($page);
        return view('rockstar::cms.page.edit', compact('page'));
    }

    public function updatePage(Request $request, $id) {
        /** @var Page $page */
        $page = Page::findOrFail($id);
        $page->fill([
            Page::FIELD_TITLE => $request->input(Page::FIELD_TITLE),
            Page::FIELD_URL => $request->input(Page::FIELD_URL),
            Page::FIELD_VIEW => $request->input(Page::FIELD_VIEW),
            Page::FIELD_ACTIVE => $request->input(Page::FIELD_ACTIVE)
        ])->save();

        // sync attributes to page
        $attributes = $request->input('attributes');
        $syncData = [];
        foreach ($attributes as $key => $value) {
            $syncData[$key] = ['value' => $value];
        }
        $page->attributes()->sync($syncData);

        return redirect()->route('dashboard.pages')->with('success', 'Page updated successfully.');
    }

    public function deletePage($id) {
        /** @var Page $page */
        $page = Page::findOrFail($id);
        $page->attributes()->detach();
        $page->blocks()->detach();
        $page->delete();

        return redirect()->route('dashboard.pages')->with('success', 'Page deleted successfully.');
    }

    public function indexBlocks()
    {
        $pages = Block::all();
        return view('rockstar::cms.block.index', compact('pages'));
    }

    public function indexAttributes()
    {
        $pages = Attribute::all();
        return view('rockstar::cms.attribute.index', compact('pages'));
    }
}
