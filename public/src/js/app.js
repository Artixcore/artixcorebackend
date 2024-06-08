"use strict";
const HSCore = {
    init: () => {
        [].slice
            .call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            .map(function (t) {
                return new bootstrap.Tooltip(t);
            }),
            [].slice
                .call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                .map(function (t) {
                    return new bootstrap.Popover(t);
                });
    },
    components: {},
};
HSCore.init();
const HSBsDropdown = {
    init(t) {
        this.setAnimations(), this.openOnHover();
    },
    setAnimations() {
        window.addEventListener("show.bs.dropdown", (t) => {
            if (!t.target.hasAttribute("data-bs-dropdown-animation")) return;
            const e = t.target.nextElementSibling;
            (e.style.opacity = 0),
                setTimeout(() => {
                    e.style.transform = `${e.style.transform} translateY(10px)`;
                }),
                setTimeout(() => {
                    (e.style.transform = `${e.style.transform} translateY(-10px)`),
                        (e.style.transition = "transform 300ms, opacity 300ms"),
                        (e.style.opacity = 1);
                }, 100);
        }),
            window.addEventListener("hide.bs.dropdown", (t) => {
                if (!t.target.hasAttribute("data-bs-dropdown-animation"))
                    return;
                const e = t.target.nextElementSibling;
                setTimeout(() => {
                    e.style.removeProperty("transform"),
                        e.style.removeProperty("transition");
                });
            });
    },
    openOnHover() {
        Array.from(
            document.querySelectorAll("[data-bs-open-on-hover]")
        ).forEach((t) => {
            var e;
            const s = new bootstrap.Dropdown(t);
            function o() {
                e = setTimeout(() => {
                    s.hide();
                }, 100);
            }
            t.addEventListener("mouseenter", () => {
                clearTimeout(e), s.show();
            }),
                s._menu.addEventListener("mouseenter", () => {
                    window.clearTimeout(e);
                }),
                Array.from([s._menu, t]).forEach((t) =>
                    t.addEventListener("mouseleave", o)
                );
        });
    },
};
/*
 * Clipboard wrapper
 * @version: 2.0.0 (Sat, 30 Jul 2021)
 * @author: HtmlStream
 * @event-namespace: .HSCore.components.HSClipboard
 * @license: Htmlstream Libraries (https://htmlstream.com/licenses)
 * Copyright 2021 Htmlstream
 */ HSCore.components.HSClipboard = {
    collection: [],
    dataAttributeName: "data-hs-clipboard-options",
    defaults: {
        type: null,
        contentTarget: null,
        classChangeTarget: null,
        defaultClass: null,
        successText: null,
        successClass: null,
        originalTitle: null,
    },
    init(t, e = {}, s) {
        const o = this;
        let n;
        n =
            t instanceof HTMLElement
                ? [t]
                : t instanceof Object
                ? t
                : document.querySelectorAll(t);
        for (let t = 0; t < n.length; t += 1)
            o.addToCollection(n[t], e, s || n[t].id);
        if (!o.collection.length) return !1;
        o._init();
    },
    _init: function (t, e) {
        const s = this;
        for (let e = 0; e < s.collection.length; e += 1) {
            let o, n;
            if (s.collection[e].hasOwnProperty("$initializedEl")) continue;
            (o = s.collection[e].options),
                (n = s.collection[e].$el),
                n.closest(".modal") && (o.container = n.closest(".modal")),
                (s.collection[e].$initializedEl = new ClipboardJS(n, o)),
                "tooltip" === o.type
                    ? (o.instanceTooltip =
                          bootstrap.Tooltip.getOrCreateInstance(n))
                    : "popover" === o.type &&
                      (o.instancePopover = new bootstrap.Popover(n));
            const i = function () {
                (o.instanceTooltip.tip.style.display = "none"),
                    n.setAttribute("data-bs-original-title", o.title),
                    o.instanceTooltip.setContent(),
                    setTimeout(() => {
                        o.instanceTooltip.tip.style.display = "block";
                    }, 100),
                    n.removeEventListener("mouseleave", i);
            };
            s.collection[e].$initializedEl.on("success", () => {
                if (o.successText || o.successClass) {
                    if (
                        (o.successText &&
                            ("tooltip" === o.type
                                ? (n.setAttribute(
                                      "data-bs-original-title",
                                      o.successText
                                  ),
                                  o.instanceTooltip.setContent(),
                                  n.addEventListener("mouseleave", i))
                                : "popover" === o.type
                                ? (t.setAttribute(
                                      "data-bs-original-title",
                                      o.successText
                                  ),
                                  o.instancePopover.show(),
                                  n.addEventListener("mouseleave", () => {
                                      n.setAttribute(
                                          "data-bs-original-title",
                                          o.title
                                      ),
                                          o.instancePopover.hide();
                                  }))
                                : ((n.lastChild.nodeValue =
                                      " " + o.successText + " "),
                                  setTimeout(function () {
                                      n.lastChild.nodeValue = o.defaultText;
                                  }, 800))),
                        o.successClass)
                    )
                        if (o.classChangeTarget) {
                            let t = document.querySelector(o.classChangeTarget);
                            if (!t) return;
                            t.classList.remove(o.defaultClass),
                                t.classList.add(o.successClass),
                                setTimeout(function () {
                                    t.classList.remove(o.successClass),
                                        t.classList.add(o.defaultClass);
                                }, 800);
                        } else
                            n.classList.remove(o.defaultClass),
                                n.classList.add(o.successClass),
                                setTimeout(function () {
                                    n.classList.remove(o.successClass),
                                        n.classList.add(o.defaultClass);
                                }, 800);
                    if ("cut" === o.action) {
                        const t = document.querySelector(o.contentTarget);
                        t && "TEXTAREA" === t.nodeName && (t.value = "");
                    }
                }
            });
        }
    },
    setShortcodes(t, e) {
        let s = e,
            o = document.querySelector(s.contentTarget);
        "SELECT" === o.tagName ||
        "INPUT" === o.tagName ||
        "TEXTAREA" === o.tagName
            ? (s.shortcodes[s.contentTarget] = o.value)
            : (s.shortcodes[s.contentTarget] = o.innerText);
    },
    addToCollection(t, e, s) {
        (e = Object.assign(
            { shortcodes: {} },
            this.defaults,
            t.hasAttribute(this.dataAttributeName)
                ? JSON.parse(t.getAttribute(this.dataAttributeName))
                : {},
            e
        )),
            this.collection.push({
                $el: t,
                id: s || null,
                options: Object.assign({}, e, {
                    windowWidth: window.outerWidth,
                    defaultText: t.lastChild.nodeValue,
                    title: t.getAttribute("data-bs-original-title"),
                    container:
                        !!this.defaults.container &&
                        document.querySelector(this.defaults.container),
                    text: (s) => {
                        var o = JSON.parse(
                            s.getAttribute("data-hs-clipboard-options")
                        );
                        return (
                            o.contentTarget && this.setShortcodes(t, e),
                            e.shortcodes[o.contentTarget] ||
                                t.getAttribute("data-clipboard-text")
                        );
                    },
                }),
            });
    },
    getItems() {
        const t = this;
        let e = [];
        for (let s = 0; s < t.collection.length; s += 1)
            e.push(t.collection[s].$initializedEl);
        return e;
    },
    getItem(t) {
        return "number" == typeof t
            ? this.collection[t].$initializedEl
            : this.collection.find((e) => e.id === t).$initializedEl;
    },
};
