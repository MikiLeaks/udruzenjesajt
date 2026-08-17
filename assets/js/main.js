
const hamburger=document.querySelector('.hamburger');
const mobile=document.querySelector('.mobile-panel');
if(hamburger&&mobile){hamburger.addEventListener('click',()=>{mobile.classList.toggle('open');hamburger.setAttribute('aria-expanded',mobile.classList.contains('open'));});}
document.querySelectorAll('.faq-q').forEach(btn=>btn.addEventListener('click',()=>btn.parentElement.classList.toggle('open')));
const banner=document.querySelector('.cookie-banner');
if(banner && localStorage.getItem('mwdCookies')) banner.classList.add('hidden');
const backToTop=document.querySelector('.back-to-top');
function pomeriDugmeIznadTrake(){
  if(!backToTop) return;
  if(banner && !banner.classList.contains('hidden')){
    backToTop.style.bottom=(banner.offsetHeight+38)+'px';
  } else {
    backToTop.style.bottom='';
  }
}
document.querySelectorAll('[data-cookie]').forEach(btn=>btn.addEventListener('click',()=>{localStorage.setItem('mwdCookies',btn.dataset.cookie);banner?.classList.add('hidden');pomeriDugmeIznadTrake();}));
if(backToTop){
  window.addEventListener('scroll',()=>backToTop.classList.toggle('visible',window.scrollY>420));
  backToTop.addEventListener('click',()=>window.scrollTo({top:0,behavior:'smooth'}));
  window.addEventListener('resize',pomeriDugmeIznadTrake);
  pomeriDugmeIznadTrake();
}
document.querySelectorAll('form[data-demo-form]').forEach(form=>form.addEventListener('submit',e=>{e.preventDefault();const out=form.querySelector('.form-message');if(out){out.textContent='Forma je uspešno popunjena u demo prikazu. Za slanje sa sajta potrebno je povezati e-mail servis ili WordPress dodatak.';out.style.display='block';}form.reset();}));
document.querySelectorAll('[data-year]').forEach(el=>el.textContent=new Date().getFullYear());
