<x-layout title="TOP | プレツイ">
    <x-layout.single>
        <h2 class="text-center text-yellow-500 text-4xl font-bold mt-8 mb-8">
            プレツイ
        </h2>
        <h3 class="text-center text-gray-500 text-xl mt-8 mb-8">
            プレゼント選びに迷ったら投稿を参考に！
            <br>このプレゼントは嬉しいかどうか評価！
        </h3>
        <x-tweet.form.post></x-tweet.form.post>
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
    </x-layout.single>
</x-layout>
