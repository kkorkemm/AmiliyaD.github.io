console.log("ITS WOOOORK")


// ПОСТ ЗАПРОС ДЛЯ ЛАЙКОВ
let a =  parseInt(document.querySelector('.buttons_like').value)
console.log(a)
let resFetc = 0;
let button = document.querySelector('.buttons_like')
button.onclick = async function() {
    let post = await fetch('http://amiliya/NEPOLY/public/api/v1/historyPar/getLike', {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
           
        },
        body: JSON.stringify(a)
    });
    let res = await post.json()
    console.log(res[0])
    
    resFetc = res
}
console.log(resFetc)