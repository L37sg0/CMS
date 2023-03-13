<x-rockstar::layout>
    <x-slot:header>Social</x-slot:header>
    <h1>Social edit Section</h1>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <div class="flex flex-row ml-3">
        <i class="fa fa-facebook-official"></i>
        <x-input-label for="facebook" :value="__('Facebook')"/>
        <x-text-input id="facebook" class="block mt-1 w-full" type="url" name="facebook" :value="old('facebook')"
                      required
                      autofocus autocomplete="facebook"/>
        <x-input-error :messages="$errors->get('facebook')" class="mt-2"/>
        <x-primary-button>Update</x-primary-button>
    </div>

    <div class="flex flex-row ml-3">
        <i class="fa fa-pinterest-p"></i>
        <x-input-label for="pinterest" :value="__('Pinterest')"/>
        <x-text-input id="pinterest" class="block mt-1 w-full" type="url" name="pinterest" :value="old('pinterest')"
                      required
                      autofocus autocomplete="pinterest"/>
        <x-input-error :messages="$errors->get('pinterest')" class="mt-2"/>
        <x-primary-button>Update</x-primary-button>
    </div>

    <div class="flex flex-row ml-3">
        <i class="fa fa-twitter"></i>
        <x-input-label for="twitter" :value="__('Twitter')"/>
        <x-text-input id="twitter" class="block mt-1 w-full" type="url" name="twitter" :value="old('twitter')"
                      required
                      autofocus autocomplete="twitter"/>
        <x-input-error :messages="$errors->get('twitter')" class="mt-2"/>
        <x-primary-button>Update</x-primary-button>
    </div>

    <div class="flex flex-row ml-3">
        <i class="fa fa-flickr"></i>
        <x-input-label for="flickr" :value="__('Flickr')"/>
        <x-text-input id="flickr" class="block mt-1 w-full" type="url" name="flickr" :value="old('flickr')"
                      required
                      autofocus autocomplete="flickr"/>
        <x-input-error :messages="$errors->get('flickr')" class="mt-2"/>
        <x-primary-button>Update</x-primary-button>
    </div>

    <div class="flex flex-row ml-3">
        <i class="fa fa-linkedin"></i>
        <x-input-label for="linkedin" :value="__('Linkedin')"/>
        <x-text-input id="linkedin" class="block mt-1 w-full" type="url" name="linkedin" :value="old('linkedin')"
                      required
                      autofocus autocomplete="linkedin"/>
        <x-input-error :messages="$errors->get('linkedin')" class="mt-2"/>
        <x-primary-button>Update</x-primary-button>
    </div>

</x-rockstar::layout>
