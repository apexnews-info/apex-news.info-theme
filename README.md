# テーマ

## 必要なもの

- Docker
  - docker-compose
- Wordpress 内のデータ
  - 開発環境を整えるため、本番に近いデータが必要
  - 現状 API で引っ張ってくる仕組みなどはないため、最初に手動で wp-content や DB の中身を引っ張ってきている
    - docker-volumes ディレクトリに適切に配置すれば良い

## スクリプト

### 開発環境の起動

```bash
$ npm run dev
```

- ローカルコンテナの起動
- scss の自動コンパイル

## 本番環境について

main ブランチを push すると自動で本番に反映される。
