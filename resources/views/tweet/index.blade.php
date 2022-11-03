<x-layout title="TOP | プレツイ">
    <x-layout.single>
        <div class="px-2 pt-20">
            <h3 class="text-center text-gray-500 text-lg mt-8 mb-8">
                <div class="inline-flex border-b border-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>プレゼント選びの参考＆評価
                </div>
            </h3>
                <x-tweet.form.post></x-tweet.form.post>
                <x-tweet.list :tweets="$tweets" :keyword="$keyword" :keyword_g="$keyword_g"
                :keyword_r="$keyword_r" :keyword_a="$keyword_a" :keyword_s="$keyword_s"></x-tweet.list>
        </div>
    </x-layout.single>
</x-layout>

