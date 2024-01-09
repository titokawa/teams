let resultText = ''; // グローバル変数として宣言

window.onload = function () {
    // 各質問の回答値を取得
    const answer1 = parseInt(getParameterByName('question1'));
    const answer2 = parseInt(getParameterByName('question2'));
    const answer3 = parseInt(getParameterByName('question3'));
    const answer4 = parseInt(getParameterByName('question4'));
    const answer5 = parseInt(getParameterByName('question5'));

    // 各質問のポイントを合計
    const totalPoints = answer1 + answer2 + answer3 + answer4 + answer5 /* + ... */;

    // 結果を表示
    displayResult(totalPoints);

    // 分析結果を表示
    displayAnalysisResult();
};

// 結果を表示する
function displayResult(totalPoints) {
    console.log(totalPoints)
    // 結果に基づいてテキストを設定
    if (totalPoints >= 20) {
        resultText = "あなたは内向的です";
    } else if (totalPoints >= 10) {
        resultText = "あなたは両間的です";
    } else {
        resultText = "あなたは外向的です";
    }

    // 結果を表示
    console.log(resultText);
    document.getElementById('resultText').textContent = resultText;
}

// 分析結果を表示する
function displayAnalysisResult() {
    // ここで分析結果を表示する処理を追加する
    const analysisResultContainer = document.getElementById("analysisResult");
    // const detailedAnalysisResultContainer = document.getElementById("detailedAnalysisResult");

    // 分析結果を表示
    analysisResultContainer.innerHTML = `
    <p>あなたは以下のような傾向があります：</p>
    <ul>
        <li>傾向1: 人間同士の相互作用を楽しみ、熱狂的に他人と関わることの多い傾向がある。</li>
        <li>傾向2: 他の人々の周囲にいることで精力的に活動し、繁栄する。</li>
        <!-- 必要に応じて追加 -->
    </ul>
    `;

    // // 例：細かい分析結果を表示
    // detailedAnalysisResultContainer.innerHTML = `
    // <p>以下は各項目の詳細な分析結果です：</p>
    // <ul>
    //     <li>項目1: ここに項目1の分析結果を表示</li>
    //     <li>項目2: ここに項目2の分析結果を表示</li>
    //     <!-- 必要に応じて追加 -->
    // </ul>
    // `;
}

// ページが読み込まれたときに分析結果を表示
function getParameterByName(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

// function displayResult(totalPoints) {
//     let resultText = '';

//     // 結果に基づいてテキストを設定
//     if (totalPoints >= 20) {
//         resultText = "あなたは内向的です";
//     } else if (totalPoints >= 10) {
//         resultText = "あなたは中間的です";
//     } else {
//         resultText = "あなたは外向的です";
//     }

//     // 分析結果の表示
//     function displayAnalysisResult() {
//         // ここで分析結果を表示する処理を追加する
//         const analysisResultContainer = document.getElementById("analysisResult");
//         const detailedAnalysisResultContainer = document.getElementById("detailedAnalysisResult");

//         // 例：分析結果を表示
//         analysisResultContainer.innerHTML = `
//       <p>あなたの知能検査の結果は以下のような傾向があります：</p>
//       <ul>
//         <li>傾向1: ここに傾向1の説明や結果を表示</li>
//         <li>傾向2: ここに傾向2の説明や結果を表示</li>
//         <!-- 必要に応じて追加 -->
//       </ul>
//     `;

//         // 例：細かい分析結果を表示
//         detailedAnalysisResultContainer.innerHTML = `
//       <p>以下は各項目の詳細な分析結果です：</p>
//       <ul>
//         <li>項目1: ここに項目1の分析結果を表示</li>
//         <li>項目2: ここに項目2の分析結果を表示</li>
//         <!-- 必要に応じて追加 -->
//       </ul>
//     `;
//     }

//     // // 結果を表示
//     // document.getElementById('resultText').textContent = resultText;

// }
