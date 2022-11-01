@auth
<div class="p-4">
    <form action="{{ route('tweet.create') }}" method="post"
    enctype="multipart/form-data">
        @csrf
        <div class="mt-1 justify-center">
            <div>
                <p class="text-md text-gray-500">
                    お相手
                </p>
                <select name="situation"
                        class="focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500">
                    <option value="未選択"
                    >選択してください</option>
                    <option value="誕生日">誕生日</option>
                    <option value="クリスマス">クリスマス</option>
                    <option value="バレンタイン">バレンタイン</option>
                    <option value="ホワイトデー">ホワイトデー</option>
                    <option value="記念日(0~1年)">記念日(0~1年)</option>
                    <option value="記念日(1~3年)">記念日(1~3年)</option>
                    <option value="記念日(3~年)">記念日(3~年)</option>
                    <option value="結婚記念日">結婚記念日</option>
                    <option value="プロポーズ">プロポーズ</option>
                    <option value="母の日">母の日</option>
                    <option value="父の日">父の日</option>
                    <option value="敬老の日">敬老の日</option>
                    <option value="親孝行">親孝行</option>
                    <option value="お中元">お中元</option>
                    <option value="お歳暮">お歳暮</option>
                    <option value="餞別">餞別</option>
                    <option value="結婚祝い">結婚祝い</option>
                    <option value="出産祝い">出産祝い</option>
                    <option value="入学祝い">入学祝い</option>
                    <option value="卒業祝い">卒業祝い</option>
                    <option value="合格祝い">合格祝い</option>
                    <option value="内定祝い">内定祝い</option>
                    <option value="就職祝い">就職祝い</option>
                    <option value="新築祝い">新築祝い</option>
                    <option value="昇進祝い">昇進祝い</option>
                    <option value="退職祝い">退職祝い</option>
                    <option value="還暦祝い">還暦祝い</option>
                    <option value="成人祝い">成人祝い</option>
                    <option value="手土産">手土産</option>
                    <option value="お見舞い">お見舞い</option>
                    <option value="サプライズ">サプライズ</option>
                    <option value="ご褒美">ご褒美</option>
                    <option value="自分へのご褒美">自分へのご褒美</option>
                    <option value="パーティー">パーティー</option>
                    <option value="引き出物">引き出物</option>
                    <option value="謝罪">謝罪</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div>
                <p class="text-md text-gray-500">
                    お相手の年齢
                </p>
                <select name="situation"
                        class="focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500">
                    <option value="未選択"
                    >選択してください</option>
                    <option value="誕生日">誕生日</option>
                    <option value="クリスマス">クリスマス</option>
                    <option value="バレンタイン">バレンタイン</option>
                    <option value="ホワイトデー">ホワイトデー</option>
                    <option value="記念日(0~1年)">記念日(0~1年)</option>
                    <option value="記念日(1~3年)">記念日(1~3年)</option>
                    <option value="記念日(3~年)">記念日(3~年)</option>
                    <option value="結婚記念日">結婚記念日</option>
                    <option value="プロポーズ">プロポーズ</option>
                    <option value="母の日">母の日</option>
                    <option value="父の日">父の日</option>
                    <option value="敬老の日">敬老の日</option>
                    <option value="親孝行">親孝行</option>
                    <option value="お中元">お中元</option>
                    <option value="お歳暮">お歳暮</option>
                    <option value="餞別">餞別</option>
                    <option value="結婚祝い">結婚祝い</option>
                    <option value="出産祝い">出産祝い</option>
                    <option value="入学祝い">入学祝い</option>
                    <option value="卒業祝い">卒業祝い</option>
                    <option value="合格祝い">合格祝い</option>
                    <option value="内定祝い">内定祝い</option>
                    <option value="就職祝い">就職祝い</option>
                    <option value="新築祝い">新築祝い</option>
                    <option value="昇進祝い">昇進祝い</option>
                    <option value="退職祝い">退職祝い</option>
                    <option value="還暦祝い">還暦祝い</option>
                    <option value="成人祝い">成人祝い</option>
                    <option value="手土産">手土産</option>
                    <option value="お見舞い">お見舞い</option>
                    <option value="サプライズ">サプライズ</option>
                    <option value="ご褒美">ご褒美</option>
                    <option value="自分へのご褒美">自分へのご褒美</option>
                    <option value="パーティー">パーティー</option>
                    <option value="引き出物">引き出物</option>
                    <option value="謝罪">謝罪</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div>
                <p class="text-md text-gray-500">
                    シチュエーション
                </p>
                <select name="situation"
                        class="focus:ring-yellow-400 focus:border-yellow-400 mt-1 block sm:text-sm border border-gray-300 rounded-md text-gray-500">
                    <option value="未選択"
                    >選択してください</option>
                    <option value="誕生日">誕生日</option>
                    <option value="クリスマス">クリスマス</option>
                    <option value="バレンタイン">バレンタイン</option>
                    <option value="ホワイトデー">ホワイトデー</option>
                    <option value="記念日(0~1年)">記念日(0~1年)</option>
                    <option value="記念日(1~3年)">記念日(1~3年)</option>
                    <option value="記念日(3年~)">記念日(3年~)</option>
                    <option value="結婚記念日">結婚記念日</option>
                    <option value="プロポーズ">プロポーズ</option>
                    <option value="母の日">母の日</option>
                    <option value="父の日">父の日</option>
                    <option value="敬老の日">敬老の日</option>
                    <option value="親孝行">親孝行</option>
                    <option value="お中元">お中元</option>
                    <option value="お歳暮">お歳暮</option>
                    <option value="餞別">餞別</option>
                    <option value="結婚祝い">結婚祝い</option>
                    <option value="出産祝い">出産祝い</option>
                    <option value="入学祝い">入学祝い</option>
                    <option value="卒業祝い">卒業祝い</option>
                    <option value="合格祝い">合格祝い</option>
                    <option value="内定祝い">内定祝い</option>
                    <option value="就職祝い">就職祝い</option>
                    <option value="新築祝い">新築祝い</option>
                    <option value="昇進祝い">昇進祝い</option>
                    <option value="退職祝い">退職祝い</option>
                    <option value="還暦祝い">還暦祝い</option>
                    <option value="成人祝い">成人祝い</option>
                    <option value="手土産">手土産</option>
                    <option value="お見舞い">お見舞い</option>
                    <option value="サプライズ">サプライズ</option>
                    <option value="ご褒美">ご褒美</option>
                    <option value="自分へのご褒美">自分へのご褒美</option>
                    <option value="パーティー">パーティー</option>
                    <option value="引き出物">引き出物</option>
                    <option value="謝罪">謝罪</option>
                    <option value="その他">その他</option>
                </select>
            </div>
        </div>
        <div class="mt-1">
            <textarea
                name="tweet"
                rows="3"
                class="focus:ring-yellow-400 focus:border-yellow-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                placeholder="コメントを入力"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            140文字まで
        </p>
        <x-tweet.form.images></x-tweet.form.images>

        @error('tweet')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror

        <div class="flex flex-wrap justify-end">
            <x-element.button>
                投稿
            </x-element.button>
        </div>
    </form>
</div>
@endauth
@guest
<div class="flex flex-wrap justify-center">
    <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
        <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
        <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
    </div>
</div>
@endguest