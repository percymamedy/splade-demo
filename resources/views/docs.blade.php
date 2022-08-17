<x-layout>
  <x-slot name="header">
    {{ __('Docs') }}
  </x-slot>

  <x-panel>
    {{--        <x-splade-modal>--}}
    <h1 class="text-2xl">Hi developer!</h1>
    <p class="text-lg mt-2">You'll find the docs at <a target="_blank" class="underline" href="https://splade.dev/docs">splade.dev/docs</a>
    </p>
    {{--        </x-splade-modal>--}}
  </x-panel>

  {{--  <x-panel>--}}
  {{--    <x-splade-toggle>--}}
  {{--      <button @click="toggle">Show/hide more</button>--}}
  {{--      <p v-show="!toggled">Short text...</p>--}}
  {{--      <p v-show="toggled">Full content: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis congue sem.--}}
  {{--        Etiam blandit velit a quam suscipit blandit. Phasellus suscipit tempus vestibulum. Aenean sit amet tempor urna.--}}
  {{--        Curabitur laoreet placerat ligula, dignissim interdum velit euismod eu. Sed rhoncus ex vitae tortor tristique,--}}
  {{--        ut molestie dolor euismod. In faucibus sagittis sagittis. Aenean blandit lacus nec blandit cursus. Etiam eu--}}
  {{--        tellus at quam porta porttitor vitae a lorem. Ut mattis ultricies dui ac dictum. Vestibulum porttitor nibh odio,--}}
  {{--        et consectetur dolor mattis vitae. Integer rutrum erat et mauris commodo sagittis. Quisque gravida urna at--}}
  {{--        venenatis auctor. Morbi ut lacus venenatis, dignissim augue ut, lobortis tellus.</p>--}}
  {{--    </x-splade-toggle>--}}
  {{--  </x-panel>--}}

{{--  <x-panel>--}}
{{--    <x-splade-data :default="['show' => true]">--}}
{{--      <button v-show="!data.show" @click="data.show = true">Show more</button>--}}
{{--      <button v-show="data.show" @click="data.show = false">Show less</button>--}}

{{--      <p v-show="!data.show">Short text...</p>--}}

{{--      <p v-show="data.show">Full content: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis congue sem.--}}
{{--        Etiam blandit velit a quam suscipit blandit. Phasellus suscipit tempus vestibulum. Aenean sit amet tempor urna.--}}
{{--        Curabitur laoreet placerat ligula, dignissim interdum velit euismod eu. Sed rhoncus ex vitae tortor tristique,--}}
{{--        ut molestie dolor euismod. In faucibus sagittis sagittis. Aenean blandit lacus nec blandit cursus. Etiam eu--}}
{{--        tellus at quam porta porttitor vitae a lorem. Ut mattis ultricies dui ac dictum. Vestibulum porttitor nibh odio,--}}
{{--        et consectetur dolor mattis vitae. Integer rutrum erat et mauris commodo sagittis. Quisque gravida urna at--}}
{{--        venenatis auctor. Morbi ut lacus venenatis, dignissim augue ut, lobortis tellus.--}}
{{--      </p>--}}
{{--    </x-splade-data>--}}
{{--  </x-panel>--}}
</x-layout>
