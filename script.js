// script.js

function startDiagnosis() {
  // クイズ本体へのリダイレクト
  window.location.href = "quiz.html";
}

// 病院データへ飛ぶボタンのクリックイベント
function goToHospitalData() {
  // ここに病院データ一覧ページへのリダイレクト処理を追加する
  window.location.href = "hospital_data.php"; // 仮のURL。実際の病院データ一覧ページのURLに置き換えてください
}

// 病院検索ボタンのクリックイベント
function searchHospitals() {
  // ここに病院検索処理を追加する
  // 例: フォームの入力値を取得して、検索処理を行う
  const age = document.getElementById("age").value;
  const gender = document.querySelector('input[name="gender"]:checked').value;
  const occupation = document.getElementById("occupation").value;
  const job = document.getElementById("job").value;
  const visit = document.querySelector('input[name="visit"]:checked').value;
  const address = document.getElementById("address").value;
  const email = document.getElementById("email").value;

  // ここで取得した条件を使って病院を検索する処理を行う

  // 例: 結果表示ページにリダイレクト
  window.location.href = "hospital_result.php"; // 仮のURL。実際の検索結果表示ページのURLに置き換えてください
}
