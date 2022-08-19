<x-layout>
  <x-slot name="header">
    {{ __('Home') }}
  </x-slot>

  <x-panel class="flex flex-col items-center pt-16 pb-16">
    <div class="mt-8 text-2xl">
      <p>{{ $user->name }}</p>
    </div>
    <Link
      href="{{ route('user.edit', ['user' => $user->id]) }}"
      class="mt-4 underline"
    >
    Edit
    </Link>
  </x-panel>
</x-layout>
