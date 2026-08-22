
const hamburger=document.querySelector('.hamburger');
const mobile=document.querySelector('.mobile-panel');
if(hamburger&&mobile){hamburger.addEventListener('click',()=>{mobile.classList.toggle('open');hamburger.setAttribute('aria-expanded',mobile.classList.contains('open'));});}
document.querySelectorAll('.faq-q').forEach(btn=>btn.addEventListener('click',()=>btn.parentElement.classList.toggle('open')));

/* Analitika (GTM + GA) se učitava tek kad korisnik da saglasnost — ne pri učitavanju stranice. */
function ucitajAnalitiku(){
  if(window.mwdAnalyticsLoaded) return;
  window.mwdAnalyticsLoaded=true;
  const cfg=window.mwdAnalyticsConfig||{};
  if(cfg.gtmId){
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer',cfg.gtmId);
  }
  if(cfg.gaId){
    const s=document.createElement('script');
    s.async=true;
    s.src='https://www.googletagmanager.com/gtag/js?id='+cfg.gaId;
    document.head.appendChild(s);
    window.dataLayer=window.dataLayer||[];
    window.gtag=function(){window.dataLayer.push(arguments);};
    window.gtag('js', new Date());
    window.gtag('config', cfg.gaId);
  }
}
if(localStorage.getItem('mwdCookies')==='accepted') ucitajAnalitiku();

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
document.querySelectorAll('[data-cookie]').forEach(btn=>btn.addEventListener('click',()=>{
  const izbor=btn.dataset.cookie;
  localStorage.setItem('mwdCookies',izbor);
  if(izbor==='accepted') ucitajAnalitiku();
  banner?.classList.add('hidden');
  pomeriDugmeIznadTrake();
}));
if(backToTop){
  window.addEventListener('scroll',()=>backToTop.classList.toggle('visible',window.scrollY>420));
  backToTop.addEventListener('click',()=>window.scrollTo({top:0,behavior:'smooth'}));
  window.addEventListener('resize',pomeriDugmeIznadTrake);
  pomeriDugmeIznadTrake();
}
/* Slanje formi (kontakt, a kasnije i ostale) bez ponovnog učitavanja stranice — POST ide na obrada-forme.php */
document.querySelectorAll('form[data-ajax-form]').forEach(form=>{
  form.addEventListener('submit', async e=>{
    e.preventDefault();
    const dugme = form.querySelector('button[type="submit"]');
    const poruka = form.querySelector('.form-message');
    const izvornoDugme = dugme ? dugme.textContent : '';
    if(dugme){ dugme.disabled = true; dugme.textContent = 'Slanje...'; }
    if(poruka){ poruka.style.display = 'none'; poruka.classList.remove('success','error'); }
    try{
      const odgovor = await fetch(form.action, {
        method: 'POST',
        headers: { 'X-Requested-With': 'fetch' },
        body: new FormData(form)
      });
      const podaci = await odgovor.json();
      if(poruka){
        poruka.textContent = podaci.message;
        poruka.classList.add(podaci.success ? 'success' : 'error');
        poruka.style.display = 'block';
      }
      if(podaci.success) form.reset();
    }catch(err){
      if(poruka){
        poruka.textContent = 'Došlo je do greške prilikom slanja. Pokušajte ponovo malo kasnije.';
        poruka.classList.add('error');
        poruka.style.display = 'block';
      }
    }finally{
      if(dugme){ dugme.disabled = false; dugme.textContent = izvornoDugme; }
    }
  });
});
document.querySelectorAll('[data-year]').forEach(el=>el.textContent=new Date().getFullYear());
