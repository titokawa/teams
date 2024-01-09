// quiz_script.js

// 全質問の数を設定
const totalNumberOfQuestionsQuiz = 5;
let currentQuestion = 1; // 現在の質問番号を管理する変数

// 最初の質問を表示
document.addEventListener("DOMContentLoaded", function () {
    const firstQuestionLabel = document.querySelector('.question[data-question="1"]');
    firstQuestionLabel.style.display = "block";
    document.getElementById("resultButton").style.display = "none";
});

// 次の質問へ進む処理
console.log(value)
function nextQuestion() {
    const currentQuestionElement = document.querySelector(`.question[data-question="${currentQuestion}"]`);
    currentQuestionElement.style.display = "none"; // 現在の質問を非表示にする

    currentQuestion++; // 次の質問へ進む

    if (currentQuestion <= totalNumberOfQuestionsQuiz) {
        // 次の質問を表示
        const nextQuestionElement = document.querySelector(`.question[data-question="${currentQuestion}"]`);
        nextQuestionElement.style.display = "block";
        document.getElementById("resultButton").style.display = "none";
    }

    if (currentQuestion === totalNumberOfQuestionsQuiz) {
        // 最後の質問の場合は「結果に進む」ボタンを表示
        document.getElementById("nextButton").style.display = "none";
        document.getElementById("resultButton").style.display = "block";
    }
}

// 結果を計算し結果ページに進む処理
function calculateResult() {
    // ここで各質問の回答を取得して結果を計算する処理を追加
    // 例: 各質問の回答を取得するコード

    // 結果表示ページへリダイレクト
    window.location.href = "results.html";
}

// 入力完了ボタンの状態を管理する変数
let isCompleteButtonEnabledQuiz = false;

// 診断結果表示へのリダイレクト
function showResultsQuiz() {
    // ここに診断結果表示への処理を追加する
    // 例: リダイレクト先のURLを設定
    const resultsURL = "results.html";
    window.location.href = resultsURL;
}

// ラジオボタンが選択された時の処理
function handleRadioSelectionQuiz() {
    // ここで全てのラジオボタンが選択されているか確認し、入力完了ボタンの状態を更新
    const allQuestionsAnswered = areAllQuestionsAnsweredQuiz();
    isCompleteButtonEnabledQuiz = allQuestionsAnswered;
    document.getElementById("completeButton").disabled = !isCompleteButtonEnabledQuiz;
}

// すべての質問に回答があるかを確認する処理
function areAllQuestionsAnsweredQuiz() {
    const radioGroups = document.querySelectorAll('.question input[type="radio"]:checked');
    return radioGroups.length === totalNumberOfQuestionsQuiz;
}

// ラジオボタンの変更イベントを監視
const radioButtons = document.querySelectorAll('.question input[type="radio"]');
radioButtons.forEach(button => {
    button.addEventListener('change', handleRadioSelectionQuiz);
});

// 分析結果の表示
function displayAnalysisResultQuiz() {
    // ここで分析結果を表示する処理を追加する
    const analysisResultContainer = document.getElementById("analysisResult");
    const detailedAnalysisResultContainer = document.getElementById("detailedAnalysisResult");

    // 例：分析結果を表示
    analysisResultContainer.innerHTML = `
    <p>あなたの知能検査の結果は以下のような傾向があります：</p>
    <ul>
        <li>傾向1: ここに傾向1の説明や結果を表示</li>
        <li>傾向2: ここに傾向2の説明や結果を表示</li>
        <!-- 必要に応じて追加 -->
    </ul>
    `;

    // 例：細かい分析結果を表示
    detailedAnalysisResultContainer.innerHTML = `
    <p>以下は各項目の詳細な分析結果です：</p>
    <ul>
        <li>項目1: ここに項目1の分析結果を表示</li>
        <li>項目2: ここに項目2の分析結果を表示</li>
        <!-- 必要に応じて追加 -->
    </ul>
    `;
}

// ページが読み込まれたときに分析結果を表示
window.onload = displayAnalysisResultQuiz;
