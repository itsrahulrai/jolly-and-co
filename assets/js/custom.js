/* custom.js — sends the contact form to WhatsApp (number comes from config.php via data-whatsapp) */
(function () {
  "use strict";

  function ready(fn) {
    if (document.readyState !== "loading") fn();
    else document.addEventListener("DOMContentLoaded", fn);
  }

  ready(function () {
    var form = document.getElementById("whatsappForm");
    if (!form) return;

    var result = document.getElementById("waResult");
    var number = (form.getAttribute("data-whatsapp") || "").replace(/\D/g, "");
    var brand = form.getAttribute("data-brand") || "Website";

    function show(msg, ok) {
      if (!result) return;
      result.textContent = msg;
      result.className = "result wa-result " + (ok ? "is-ok" : "is-error");
    }

    form.addEventListener("submit", function (ev) {
      ev.preventDefault();

      var f = form.elements;
      var name = f.name.value.trim();
      var phone = f.phone.value.trim();
      var email = f.email ? f.email.value.trim() : "";
      var service = f.service ? f.service.value.trim() : "";
      var message = f.message.value.trim();

      [f.name, f.phone, f.message].forEach(function (el) { el.classList.remove("is-invalid"); });

      var bad = [];
      if (!name) bad.push(f.name);
      if (phone.replace(/\D/g, "").length < 7) bad.push(f.phone);
      if (!message) bad.push(f.message);
      if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) show("Please enter a valid email address.", false);

      if (bad.length) {
        bad.forEach(function (el) { el.classList.add("is-invalid"); });
        show("Please fill in your name, a valid phone number and your message.", false);
        bad[0].focus();
        return;
      }
      if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { f.email.focus(); return; }

      var lines = [
        "*New enquiry from " + brand + " website*",
        "",
        "*Name:* " + name,
        "*Phone:* " + phone
      ];
      if (email) lines.push("*Email:* " + email);
      if (service) lines.push("*Service:* " + service);
      lines.push("*Message:* " + message);

      var url = "https://wa.me/" + number + "?text=" + encodeURIComponent(lines.join("\n"));

      show("Opening WhatsApp\u2026", true);
      var win = window.open(url, "_blank", "noopener");
      if (!win) window.location.href = url;   // popup blocked (some mobile browsers)

      form.reset();
      if (window.jQuery && jQuery.fn.selectpicker) jQuery(form).find(".selectpicker").selectpicker("refresh");
    });

    // clear error state while typing
    form.addEventListener("input", function (e) { if (e.target.classList) e.target.classList.remove("is-invalid"); });
  });
})();
