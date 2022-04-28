@props (['genres', 'trigger'])

<div x-data="{ show: false }" @click.away="show = false">
    <!-- Trigger -->
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <!-- Dropdown links -->
    <div x-show="show" class="py-2 absolute bg-white rounded-b w-full -mt-2 z-10 shadow-sm overflow-auto max-h-52" style="display:none">
        {{ $slot }}
    </div>
</div>