<div>
    <ul class="marker:text-blue-600 list-disc ps-5 space-y-2 text-sm text-gray-600 dark:text-neutral-400">
        @foreach ($users as $user)
            <li class="p-2">
            {{ $user->name }}
          </li>
        @endforeach
      </ul>
</div>
