
function chkDuplicationId() {
    const id = document.getElementById('id');

    const url = "/api/user?id=" + id.value;
    let apiData = null;
    // API
    fetch(url)
    .then(data => { 
        // Response Status 확인 (200번 외에는 에러 처리)
        if(data.status !== 200) {
            throw new Error(data.status + ' : API Response Error' );
        }
        return data.json(); 
    })
    .then(apiData => {
        const idspan = document.getElementById('errMsgId');
        if(apiData["flg"] === "1") {
            idspan.innerHTML = apiData["msg"];
        } else {
            idspan.innerHTML = "사용 가능한 ID입니다.";
        }
    })
    // 에러는 alert로 처리
    .catch(error => alert(error.message));
}

// function confirmLogout() {
//     if(!confirm("정말로 로그아웃 하시겠습니까?")) {
        
//     } else {

//     }
// }