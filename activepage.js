const activepage= window.location.pathname;
const navLinks= document.querySelectorAll ('nav a'). 
forEach(link=>{
console.log(link.href)
if (link.href.includes('${activepage}')){
    link.classList.add('active');
}
})


