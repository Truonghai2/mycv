var arr_hinh=[
    "img/2.png",
    "img/3.png",
    "img/4.png",
    "img/5.png",
    "img/6.jpg",
]
var index=1;
function prev(e) {
    index--;
    if(index<0) index=arr_hinh.length -1;
    var hinh =document.getElementById('show'); 
    hinh.src=arr_hinh[index];

}
function next(e) {
    index++;
    if(index>=arr_hinh.length) index=0;
    var hinh =document.getElementById('show'); 
    hinh.src=arr_hinh[index];
}
var istheindex=0;
onclickImages=function () {
    var arr=[
        "img/1.png",
        "img/2.png",
        "img/3.png",
        "img/4.png",
        "img/5.png",
        "img/6.jpg",
    ]
    document.getElementById('show').src=arr[istheindex];
    istheindex++;
    if(istheindex==5){
        istheindex=0;
    }
}
setInterval(onclickImages,2500);

const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)
const tabs=$$('.nav-link')
const pane =$$('.tab-content')

tabs.forEach((tab, index) => {
    tab.onclick=function(){
        this.classList('active')
        if(classList == 'active')
        {
            
        }
        console.log(  )
    }
});

