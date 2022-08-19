<x-layout>
  <x-slot name="header">
    {{ __('Home') }}
  </x-slot>

  <x-panel class="flex flex-col items-center pt-16 pb-16">
    <div class="mt-8">
      <x-splade-form :default="$user" :action="route('user.update', ['user' => $user->id])" method="put">
        <input
          type="text"
          v-model="form.name"
        />
        <p class="text-red-500" v-text="form.errors.name" />
        <button type="submit" class="mt-4 bg-indigo-600 text-white py-2.5 px-4 rounded-md shadow">
          Save
        </button>
      </x-splade-form>
    </div>
  </x-panel>
</x-layout>
