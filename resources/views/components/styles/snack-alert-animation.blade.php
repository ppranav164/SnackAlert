
<style>

 :root {
    --animate-duration:1s;
}

.snack-alert-bounce-in {
    animation-name: bounce-in;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-timing-function: cubic-bezier(0.280, 0.840, 0.420, 1);
}

@keyframes bounce-in {
    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);
        animation-timing-function:cubic-bezier(.215,.61,.355,1)
    }
    0% {
        opacity:0;
        -webkit-transform:translate3d(0,3000px,0) scaleY(5);
        transform:translate3d(0,3000px,0) scaleY(5)
    }
    60% {
        opacity:1;
        -webkit-transform:translate3d(0,-20px,0) scaleY(.9);
        transform:translate3d(0,-20px,0) scaleY(.9)
    }
    75% {
        -webkit-transform:translate3d(0,10px,0) scaleY(.95);
        transform:translate3d(0,10px,0) scaleY(.95)
    }
    90% {
        -webkit-transform:translate3d(0,-5px,0) scaleY(.985);
        transform:translate3d(0,-5px,0) scaleY(.985)
    }
    to {
        -webkit-transform:translateZ(0);
        transform:translateZ(0)
    }
}


.snack-alert-bounce-right-down {
    animation-name: bounce-4;
    -webkit-animation-name:bounce-4;
    -webkit-animation-duration:1s;
    -webkit-animation-fill-mode:both;
    animation-fill-mode:both;
    animation-duration:1s;
    -webkit-animation-duration:var(--animate-duration);
    animation-duration:var(--animate-duration);
}

@keyframes bounce-4 {

    0% {
        -webkit-transform:scale(1);
        transform:scale(1);
        opacity:1
    }
    20% {
        -webkit-transform:translateX(0) scale(.7);
        transform:translateX(0) scale(.7);
        opacity:.7
    }
    to {
        -webkit-transform:translateX(2000px) scale(.7);
        transform:translateX(2000px) scale(.7);
        opacity:.7
    }
}

</style>

