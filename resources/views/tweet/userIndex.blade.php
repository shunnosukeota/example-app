<x-layout title="{{ $userName }} | プレツイ">
    <x-layout.single>
        <div class="px-2 pt-20">
            
            @php
                $breadcrumbs = [
                    ['href' => route('tweet.index'), 'label' => 'TOP'],
                    ['href' => '#', 'label' => '詳細']
                ];
            @endphp
            <x-element.breadcrumbs :breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
            <x-tweet.usercontent :tweets="$tweets" :userName="$userName"></x-tweet.usercontent>
        </div>
    </x-layout.single>
</x-layout>