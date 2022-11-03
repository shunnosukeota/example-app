<x-layout title="詳細 | プレツイ">
    <x-layout.single>
        <div class="px-2 pt-20">
            
            @php
                $breadcrumbs = [
                    ['href' => route('tweet.index'), 'label' => 'TOP'],
                    ['href' => '#', 'label' => '詳細']
                ];
            @endphp
            <x-element.breadcrumbs :breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
            <x-tweet.content :tweet="$tweet"></x-tweet.content>
            <x-tweet.rate :userId="$tweet->user_id" :rate="$tweet->rate" :tweetId="$tweet->id"></x-tweet.rate>
            <x-tweet.rateList :ratings="$ratings" :userId="$tweet->user_id" :tweetId="$tweet->id"></x-tweet.rateList>
        </div>
    </x-layout.single>
</x-layout>