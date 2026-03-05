$(function () {
  const $mobileNav = $("#nav-mobile");
  const $overlay = $(".nav-overlay");
  const $toggle = $(".menu-toggle");

  function openMenu(){
    $mobileNav.addClass("open").attr("aria-hidden", "false");
    $overlay.addClass("open").attr("aria-hidden", "false");
    $toggle.attr("aria-expanded", "true");
    $("body").css("overflow", "hidden");
  }

  function closeMenu(){
    $mobileNav.removeClass("open").attr("aria-hidden", "true");
    $overlay.removeClass("open").attr("aria-hidden", "true");
    $toggle.attr("aria-expanded", "false");
    $("body").css("overflow", "");
  }

  $toggle.on("click", openMenu);
  $(".menu-close").on("click", closeMenu);
  $overlay.on("click", closeMenu);

  // Fecha ao clicar em qualquer link do menu mobile
  $(".nav-mobile-links a").on("click", function(){
    closeMenu();
  });

  // ESC fecha o menu
  $(document).on("keydown", function(e){
    if(e.key === "Escape") closeMenu();
  });

  // Scroll suave nos anchors
  $('a[href^="#"]').on("click", function(e){
    const target = $(this.getAttribute("href"));
    if(target.length){
      e.preventDefault();
      const headerH = $(".site-header").outerHeight() || 0;
      $("html, body").animate({ scrollTop: target.offset().top - headerH }, 500);
    }
  });
});



// =========================
// PROVA SOCIAL - MODAL VÍDEO
// =========================
$(function(){
  const $modal = $(".video-modal");
  const $overlay = $(".video-modal-overlay");
  const $close = $(".video-modal-close");
  const videoEl = document.getElementById("socialVideo");

  function openVideo(src){
    if(!videoEl) return;
    videoEl.src = src;
    $modal.addClass("open").attr("aria-hidden", "false");
    $("body").css("overflow", "hidden");
    setTimeout(() => { videoEl.play().catch(()=>{}); }, 150);
  }

  function closeVideo(){
    $modal.removeClass("open").attr("aria-hidden", "true");
    $("body").css("overflow", "");
    if(videoEl){
      videoEl.pause();
      videoEl.removeAttribute("src");
      videoEl.load();
    }
  }

  $(".video-card").on("click", function(){
    const src = $(this).data("video");
    openVideo(src);
  });

  $close.on("click", closeVideo);
  $overlay.on("click", closeVideo);

  $(document).on("keydown", function(e){
    if(e.key === "Escape") closeVideo();
  });
});


// Máscara simples de telefone (Brasil)
$(function(){
  const $tel = $('input[name="telefone"]');
  $tel.on('input', function(){
    let v = $(this).val().replace(/\D/g,'').slice(0,11);
    if(v.length >= 11){
      v = v.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
    } else if(v.length >= 10){
      v = v.replace(/^(\d{2})(\d{4})(\d{4}).*/, '($1) $2-$3');
    } else if(v.length >= 3){
      v = v.replace(/^(\d{2})(\d+)/, '($1) $2');
    }
    $(this).val(v);
  });
});