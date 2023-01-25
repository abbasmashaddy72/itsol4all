<div class="flex items-center mt-8">
    <h2 class="mr-auto text-lg font-medium">
        @if (getRouteAction() == 'create')
            {{ __('Create') }} {{ $title }}
        @elseif(getRouteAction() == 'edit')
            {{ __('Edit') }} {{ $title }}
        @elseif(getRouteAction() == 'show')
            {{ __('Show') }} {{ $title }}
        @else
            {{ $title }}
        @endif
    </h2>
    @if (!empty($rt_button))
        <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
            {{ $rt_button }}
        </div>
    @endif
</div>

<div class="w-full">
    {{ $slot }}
</div>
