<!DOCTYPE html>
<html lang="ja">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<title>hello</title>
	<!-- Vue.js -->
	<script src="https://unpkg.com/vue"></script>
</head>
<body>
	<div id="login_section">
		<input type="text" name="email" v-model="email">
		<input type="password" name="password" v-model="password">
		<button class="button" v-on:click="parameterSend()">ログイン実行</button>
		<p>@{{ errorMessage }}</p>
	</div>

	<script>
		let login_function = new Vue({
			el: '#login_section',
			data:{
				errorMessage: ''
			},
			methods:{
				parameterSend: function (){
					// パラメータを取得する
					let email = this.email;
					let password = this.password;
					// バリデーションチェック
					let emailIsNull = isNull(email);
					let passwordIsNull = isNull(password);
					// メールアドレス、パスワードが空の場合はエラーとする
					if(emailIsNull == true || passwordIsNull == true){
						this.errorMessage = 'メールアドレスとパスワードが正しく入力されているか確認してください。';
					}
					else{
						this.errorMessage = 'ログイン実行中...';
						// サーバーサイドログイン処理の呼び出し
						
					}
				}
			}
		});

		function isNull(obj){
			// null チェッカー
			if(typeof obj === 'undefined'){
				return true;
			}
			else if(!obj){
				return true;
			}
			else{
				return false;
			}
		}
	</script>
</body>
</html>