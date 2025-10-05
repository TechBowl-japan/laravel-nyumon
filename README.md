# 環境構築

1. Git
2. Node.js（v20以降を推奨します。）
3. Yarn (v1)
4. Visual Studio Code
5. Railway VSCode 拡張機能
6. Docker

上記をインストールする必要があります。
1 ~ 5 のインストール方法などは、[Railway 準備編](https://www.notion.so/techbowl/Railway-ceba695d5014460e9733c2a46318cdec) をご確認ください。

Docker のセットアップについては、Railway 内の Station3 で行います。

その他リポジトリの更新の仕方や、トラブルシューティングについても上記の Railway 準備編にございます。
何かあった際は、まずそちらを確認しましょう。

# テスト実行の仕方

詳細にテストを実施したい場合は下記コマンドの Station 番号を変更し、実行します。
```bash
# Station1のテストをする場合
docker compose exec php-container vendor/bin/phpunit tests/Feature/LaravelNyumon/Station1
```
