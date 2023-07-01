function detectmob() {
    return window.innerWidth <= 800 ? !0 : !1
}

function lazyload() {
    lazyloadThrottleTimeout && clearTimeout(lazyloadThrottleTimeout);
    lazyloadThrottleTimeout = setTimeout(function () {
        var n = window.pageYOffset;
        lazyloadImages.forEach(function (t) {
            t.offsetTop < window.innerHeight + n && (t.src = t.dataset.src, t.classList.remove("lazy"))
        });
        lazyloadImages.length == 0 && (document.removeEventListener("scroll", lazyload), window.removeEventListener("resize", lazyload), window.removeEventListener("orientationChange", lazyload))
    }, 20)
}

function isHidden(n) {
    var t = window.getComputedStyle(n);
    return t.display === "none"
}

var lazyloadImages, lazyloadThrottleTimeout;
!function (n, t) {
    "object" == typeof module && "object" == typeof module.exports ? module.exports = n.document ? t(n, !0) : function (n) {
        if (!n.document) throw new Error("jQuery requires a window with a document");
        return t(n)
    } : t(n)
}("undefined" != typeof window ? window : this, function (n, t) {
    function ii(n) {
        var t = !!n && "length" in n && n.length, r = i.type(n);
        return "function" !== r && !i.isWindow(n) && ("array" === r || 0 === t || "number" == typeof t && t > 0 && t - 1 in n)
    }

    function ri(n, t, r) {
        if (i.isFunction(t)) return i.grep(n, function (n, i) {
            return !!t.call(n, i, n) !== r
        });
        if (t.nodeType) return i.grep(n, function (n) {
            return n === t !== r
        });
        if ("string" == typeof t) {
            if (ye.test(t)) return i.filter(t, n, r);
            t = i.filter(t, n)
        }
        return i.grep(n, function (n) {
            return i.inArray(n, t) > -1 !== r
        })
    }

    function br(n, t) {
        do n = n[t]; while (n && 1 !== n.nodeType);
        return n
    }

    function dr() {
        u.addEventListener ? (u.removeEventListener("DOMContentLoaded", v), n.removeEventListener("load", v)) : (u.detachEvent("onreadystatechange", v), n.detachEvent("onload", v))
    }

    function v() {
        (u.addEventListener || "load" === n.event.type || "complete" === u.readyState) && (dr(), i.ready())
    }

    function gr(n, t, r) {
        if (void 0 === r && 1 === n.nodeType) {
            var u = "data-" + t.replace(we, "-$1").toLowerCase();
            if ("string" == typeof (r = n.getAttribute(u))) {
                try {
                    r = "true" === r || "false" !== r && ("null" === r ? null : +r + "" === r ? +r : pe.test(r) ? i.parseJSON(r) : r)
                } catch (n) {
                }
                i.data(n, t, r)
            } else r = void 0
        }
        return r
    }

    function fi(n) {
        for (var t in n) if (("data" !== t || !i.isEmptyObject(n[t])) && "toJSON" !== t) return !1;
        return !0
    }

    function nu(n, t, r, u) {
        if (ot(n)) {
            var h, e, s = i.expando, l = n.nodeType, o = l ? i.cache : n, f = l ? n[s] : n[s] && s;
            if (f && o[f] && (u || o[f].data) || void 0 !== r || "string" != typeof t) return f || (f = l ? n[s] = c.pop() || i.guid++ : s), o[f] || (o[f] = l ? {} : {toJSON: i.noop}), "object" != typeof t && "function" != typeof t || (u ? o[f] = i.extend(o[f], t) : o[f].data = i.extend(o[f].data, t)), e = o[f], u || (e.data || (e.data = {}), e = e.data), void 0 !== r && (e[i.camelCase(t)] = r), "string" == typeof t ? null == (h = e[t]) && (h = e[i.camelCase(t)]) : h = e, h
        }
    }

    function tu(n, t, u) {
        if (ot(n)) {
            var o, s, h = n.nodeType, f = h ? i.cache : n, e = h ? n[i.expando] : i.expando;
            if (f[e]) {
                if (t && (o = u ? f[e] : f[e].data)) {
                    for (t = i.isArray(t) ? t.concat(i.map(t, i.camelCase)) : (t in o) ? [t] : ((t = i.camelCase(t)) in o) ? [t] : t.split(" "), s = t.length; s--;) delete o[t[s]];
                    if (u ? !fi(o) : !i.isEmptyObject(o)) return
                }
                (u || (delete f[e].data, fi(f[e]))) && (h ? i.cleanData([n], !0) : r.deleteExpando || f != f.window ? delete f[e] : f[e] = void 0)
            }
        }
    }

    function iu(n, t, r, u) {
        var h, o = 1, l = 20, c = u ? function () {
                return u.cur()
            } : function () {
                return i.css(n, t, "")
            }, s = c(), e = r && r[3] || (i.cssNumber[t] ? "" : "px"),
            f = (i.cssNumber[t] || "px" !== e && +s) && oi.exec(i.css(n, t));
        if (f && f[3] !== e) {
            e = e || f[3];
            r = r || [];
            f = +s || 1;
            do f /= o = o || ".5", i.style(n, t, f + e); while (o !== (o = c() / s) && 1 !== o && --l)
        }
        return r && (f = +f || +s || 0, h = r[1] ? f + (r[1] + 1) * r[2] : +r[2], u && (u.unit = e, u.start = f, u.end = h)), h
    }

    function eu(n) {
        var i = fu.split("|"), t = n.createDocumentFragment();
        if (t.createElement) for (; i.length;) t.createElement(i.pop());
        return t
    }

    function f(n, t) {
        var e, u, o = 0,
            r = void 0 !== n.getElementsByTagName ? n.getElementsByTagName(t || "*") : void 0 !== n.querySelectorAll ? n.querySelectorAll(t || "*") : void 0;
        if (!r) for (r = [], e = n.childNodes || n; null != (u = e[o]); o++) !t || i.nodeName(u, t) ? r.push(u) : i.merge(r, f(u, t));
        return void 0 === t || t && i.nodeName(n, t) ? i.merge([n], r) : r
    }

    function ci(n, t) {
        for (var u, r = 0; null != (u = n[r]); r++) i._data(u, "globalEval", !t || i._data(t[r], "globalEval"))
    }

    function be(n) {
        si.test(n.type) && (n.defaultChecked = n.checked)
    }

    function su(n, t, u, e, s) {
        for (var l, h, k, c, w, b, v, d = n.length, y = eu(t), a = [], p = 0; d > p; p++) if ((h = n[p]) || 0 === h) if ("object" === i.type(h)) i.merge(a, h.nodeType ? [h] : h); else if (ou.test(h)) {
            for (c = c || y.appendChild(t.createElement("div")), w = (ru.exec(h) || ["", ""])[1].toLowerCase(), v = o[w] || o._default, c.innerHTML = v[1] + i.htmlPrefilter(h) + v[2], l = v[0]; l--;) c = c.lastChild;
            if (!r.leadingWhitespace && hi.test(h) && a.push(t.createTextNode(hi.exec(h)[0])), !r.tbody) for (l = (h = "table" !== w || li.test(h) ? "<table>" !== v[1] || li.test(h) ? 0 : c : c.firstChild) && h.childNodes.length; l--;) i.nodeName(b = h.childNodes[l], "tbody") && !b.childNodes.length && h.removeChild(b);
            for (i.merge(a, c.childNodes), c.textContent = ""; c.firstChild;) c.removeChild(c.firstChild);
            c = y.lastChild
        } else a.push(t.createTextNode(h));
        for (c && y.removeChild(c), r.appendChecked || i.grep(f(a, "input"), be), p = 0; h = a[p++];) if (e && i.inArray(h, e) > -1) s && s.push(h); else if (k = i.contains(h.ownerDocument, h), c = f(y.appendChild(h), "script"), k && ci(c), u) for (l = 0; h = c[l++];) uu.test(h.type || "") && u.push(h);
        return c = null, y
    }

    function lt() {
        return !0
    }

    function rt() {
        return !1
    }

    function lu() {
        try {
            return u.activeElement
        } catch (n) {
        }
    }

    function vi(n, t, r, u, f, e) {
        var o, s;
        if ("object" == typeof t) {
            for (s in "string" != typeof r && (u = u || r, r = void 0), t) vi(n, s, r, u, t[s], e);
            return n
        }
        if (null == u && null == f ? (f = r, u = r = void 0) : null == f && ("string" == typeof r ? (f = u, u = void 0) : (f = u, u = r, r = void 0)), !1 === f) f = rt; else if (!f) return n;
        return 1 === e && (o = f, (f = function (n) {
            return i().off(n), o.apply(this, arguments)
        }).guid = o.guid || (o.guid = i.guid++)), n.each(function () {
            i.event.add(this, t, f, u, r)
        })
    }

    function vu(n, t) {
        return i.nodeName(n, "table") && i.nodeName(11 !== t.nodeType ? t : t.firstChild, "tr") ? n.getElementsByTagName("tbody")[0] || n.appendChild(n.ownerDocument.createElement("tbody")) : n
    }

    function yu(n) {
        return n.type = (null !== i.find.attr(n, "type")) + "/" + n.type, n
    }

    function pu(n) {
        var t = ro.exec(n.type);
        return t ? n.type = t[1] : n.removeAttribute("type"), n
    }

    function wu(n, t) {
        if (1 === t.nodeType && i.hasData(n)) {
            var u, f, o, s = i._data(n), r = i._data(t, s), e = s.events;
            if (e) for (u in delete r.handle, r.events = {}, e) for (f = 0, o = e[u].length; o > f; f++) i.event.add(t, u, e[u][f]);
            r.data && (r.data = i.extend({}, r.data))
        }
    }

    function fo(n, t) {
        var u, f, e;
        if (1 === t.nodeType) {
            if (u = t.nodeName.toLowerCase(), !r.noCloneEvent && t[i.expando]) {
                for (f in (e = i._data(t)).events) i.removeEvent(t, f, e.handle);
                t.removeAttribute(i.expando)
            }
            "script" === u && t.text !== n.text ? (yu(t).text = n.text, pu(t)) : "object" === u ? (t.parentNode && (t.outerHTML = n.outerHTML), r.html5Clone && n.innerHTML && !i.trim(t.innerHTML) && (t.innerHTML = n.innerHTML)) : "input" === u && si.test(n.type) ? (t.defaultChecked = t.checked = n.checked, t.value !== n.value && (t.value = n.value)) : "option" === u ? t.defaultSelected = t.selected = n.defaultSelected : "input" !== u && "textarea" !== u || (t.defaultValue = n.defaultValue)
        }
    }

    function k(n, t, u, e) {
        t = sr.apply([], t);
        var l, o, a, h, p, c, s = 0, v = n.length, b = v - 1, y = t[0], w = i.isFunction(y);
        if (w || v > 1 && "string" == typeof y && !r.checkClone && io.test(y)) return n.each(function (i) {
            var r = n.eq(i);
            w && (t[0] = y.call(this, i, r.html()));
            k(r, t, u, e)
        });
        if (v && (l = (c = su(t, n[0].ownerDocument, !1, n, e)).firstChild, 1 === c.childNodes.length && (c = l), l || e)) {
            for (a = (h = i.map(f(c, "script"), yu)).length; v > s; s++) o = c, s !== b && (o = i.clone(o, !0, !0), a && i.merge(h, f(o, "script"))), u.call(n[s], o, s);
            if (a) for (p = h[h.length - 1].ownerDocument, i.map(h, pu), s = 0; a > s; s++) o = h[s], uu.test(o.type || "") && !i._data(o, "globalEval") && i.contains(p, o) && (o.src ? i._evalUrl && i._evalUrl(o.src) : i.globalEval((o.text || o.textContent || o.innerHTML || "").replace(uo, "")));
            c = l = null
        }
        return n
    }

    function bu(n, t, r) {
        for (var u, o = t ? i.filter(t, n) : n, e = 0; null != (u = o[e]); e++) r || 1 !== u.nodeType || i.cleanData(f(u)), u.parentNode && (r && i.contains(u.ownerDocument, u) && ci(f(u, "script")), u.parentNode.removeChild(u));
        return n
    }

    function ku(n, t) {
        var r = i(t.createElement(n)).appendTo(t.body), u = i.css(r[0], "display");
        return r.detach(), u
    }

    function vt(n) {
        var r = u, t = pi[n];
        return t || ("none" !== (t = ku(n, r)) && t || ((r = ((at = (at || i("<iframe frameborder='0' width='0' height='0'/>")).appendTo(r.documentElement))[0].contentWindow || at[0].contentDocument).document).write(), r.close(), t = ku(n, r), at.detach()), pi[n] = t), t
    }

    function bi(n, t) {
        return {
            get: function () {
                return n() ? void delete this.get : (this.get = t).apply(this, arguments)
            }
        }
    }

    function ff(n) {
        if (n in uf) return n;
        for (var i = n.charAt(0).toUpperCase() + n.slice(1), t = rf.length; t--;) if ((n = rf[t] + i) in uf) return n
    }

    function ef(n, t) {
        for (var f, r, o, e = [], u = 0, s = n.length; s > u; u++) (r = n[u]).style && (e[u] = i._data(r, "olddisplay"), f = r.style.display, t ? (e[u] || "none" !== f || (r.style.display = ""), "" === r.style.display && st(r) && (e[u] = i._data(r, "olddisplay", vt(r.nodeName)))) : (o = st(r), (f && "none" !== f || !o) && i._data(r, "olddisplay", o ? f : i.css(r, "display"))));
        for (u = 0; s > u; u++) (r = n[u]).style && (t && "none" !== r.style.display && "" !== r.style.display || (r.style.display = t ? e[u] || "" : "none"));
        return n
    }

    function of(n, t, i) {
        var r = so.exec(t);
        return r ? Math.max(0, r[1] - (i || 0)) + (r[2] || "px") : t
    }

    function sf(n, t, r, u, f) {
        for (var e = r === (u ? "border" : "content") ? 4 : "width" === t ? 1 : 0, o = 0; 4 > e; e += 2) "margin" === r && (o += i.css(n, r + b[e], !0, f)), u ? ("content" === r && (o -= i.css(n, "padding" + b[e], !0, f)), "margin" !== r && (o -= i.css(n, "border" + b[e] + "Width", !0, f))) : (o += i.css(n, "padding" + b[e], !0, f), "padding" !== r && (o += i.css(n, "border" + b[e] + "Width", !0, f)));
        return o
    }

    function hf(n, t, u) {
        var o = !0, f = "width" === t ? n.offsetWidth : n.offsetHeight, e = d(n),
            s = r.boxSizing && "border-box" === i.css(n, "boxSizing", !1, e);
        if (0 >= f || null == f) {
            if ((0 > (f = p(n, t, e)) || null == f) && (f = n.style[t]), yt.test(f)) return f;
            o = s && (r.boxSizingReliable() || f === n.style[t]);
            f = parseFloat(f) || 0
        }
        return f + sf(n, t, u || (s ? "border" : "content"), o, e) + "px"
    }

    function e(n, t, i, r, u) {
        return new e.prototype.init(n, t, i, r, u)
    }

    function af() {
        return n.setTimeout(function () {
            ut = void 0
        }), ut = i.now()
    }

    function wt(n, t) {
        var u, i = {height: n}, r = 0;
        for (t = t ? 1 : 0; 4 > r; r += 2 - t) i["margin" + (u = b[r])] = i["padding" + u] = n;
        return t && (i.opacity = i.width = n), i
    }

    function vf(n, t, i) {
        for (var u, f = (h.tweeners[t] || []).concat(h.tweeners["*"]), r = 0, e = f.length; e > r; r++) if (u = f[r].call(i, t, n)) return u
    }

    function h(n, t, r) {
        var e, o, s = 0, a = h.prefilters.length, f = i.Deferred().always(function () {
            delete l.elem
        }), l = function () {
            if (o) return !1;
            for (var s = ut || af(), t = Math.max(0, u.startTime + u.duration - s), i = 1 - (t / u.duration || 0), r = 0, e = u.tweens.length; e > r; r++) u.tweens[r].run(i);
            return f.notifyWith(n, [u, i, t]), 1 > i && e ? t : (f.resolveWith(n, [u]), !1)
        }, u = f.promise({
            elem: n,
            props: i.extend({}, t),
            opts: i.extend(!0, {specialEasing: {}, easing: i.easing._default}, r),
            originalProperties: t,
            originalOptions: r,
            startTime: ut || af(),
            duration: r.duration,
            tweens: [],
            createTween: function (t, r) {
                var f = i.Tween(n, u.opts, t, r, u.opts.specialEasing[t] || u.opts.easing);
                return u.tweens.push(f), f
            },
            stop: function (t) {
                var i = 0, r = t ? u.tweens.length : 0;
                if (o) return this;
                for (o = !0; r > i; i++) u.tweens[i].run(1);
                return t ? (f.notifyWith(n, [u, 1, 0]), f.resolveWith(n, [u, t])) : f.rejectWith(n, [u, t]), this
            }
        }), c = u.props;
        for (function (n, t) {
            var r, f, e, u, o;
            for (r in n) if (e = t[f = i.camelCase(r)], u = n[r], i.isArray(u) && (e = u[1], u = n[r] = u[0]), r !== f && (n[f] = u, delete n[r]), (o = i.cssHooks[f]) && "expand" in o) for (r in u = o.expand(u), delete n[f], u) r in n || (n[r] = u[r], t[r] = e); else t[f] = e
        }(c, u.opts.specialEasing); a > s; s++) if (e = h.prefilters[s].call(u, n, c, u.opts)) return i.isFunction(e.stop) && (i._queueHooks(u.elem, u.opts.queue).stop = i.proxy(e.stop, e)), e;
        return i.map(c, vf, u), i.isFunction(u.opts.start) && u.opts.start.call(n, u), i.fx.timer(i.extend(l, {
            elem: n,
            anim: u,
            queue: u.opts.queue
        })), u.progress(u.opts.progress).done(u.opts.done, u.opts.complete).fail(u.opts.fail).always(u.opts.always)
    }

    function nt(n) {
        return i.attr(n, "class") || ""
    }

    function ie(n) {
        return function (t, r) {
            "string" != typeof t && (r = t, t = "*");
            var u, f = 0, e = t.toLowerCase().match(s) || [];
            if (i.isFunction(r)) for (; u = e[f++];) "+" === u.charAt(0) ? (u = u.slice(1) || "*", (n[u] = n[u] || []).unshift(r)) : (n[u] = n[u] || []).push(r)
        }
    }

    function re(n, t, r, u) {
        function e(s) {
            var h;
            return f[s] = !0, i.each(n[s] || [], function (n, i) {
                var s = i(t, r, u);
                return "string" != typeof s || o || f[s] ? o ? !(h = s) : void 0 : (t.dataTypes.unshift(s), e(s), !1)
            }), h
        }

        var f = {}, o = n === tr;
        return e(t.dataTypes[0]) || !f["*"] && e("*")
    }

    function rr(n, t) {
        var u, r, f = i.ajaxSettings.flatOptions || {};
        for (r in t) void 0 !== t[r] && ((f[r] ? n : u || (u = {}))[r] = t[r]);
        return u && i.extend(!0, n, u), n
    }

    function wo(n) {
        return n.style && n.style.display || i.css(n, "display")
    }

    function ur(n, t, r, u) {
        var f;
        if (i.isArray(t)) i.each(t, function (t, i) {
            r || ko.test(n) ? u(n, i) : ur(n + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, r, u)
        }); else if (r || "object" !== i.type(t)) u(n, t); else for (f in t) ur(n + "[" + f + "]", t[f], r, u)
    }

    function fr() {
        try {
            return new n.XMLHttpRequest
        } catch (n) {
        }
    }

    function fe() {
        try {
            return new n.ActiveXObject("Microsoft.XMLHTTP")
        } catch (n) {
        }
    }

    function ee(n) {
        return i.isWindow(n) ? n : 9 === n.nodeType && (n.defaultView || n.parentWindow)
    }

    var c = [], u = n.document, a = c.slice, sr = c.concat, ti = c.push, hr = c.indexOf, ht = {}, he = ht.toString,
        tt = ht.hasOwnProperty, r = {}, cr = "1.12.4", i = function (n, t) {
            return new i.fn.init(n, t)
        }, ce = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, le = /^-ms-/, ae = /-([\da-z])/gi, ve = function (n, t) {
            return t.toUpperCase()
        }, w, ui, yr, pr, wr, ct, kr, s, o, ou, li, at, pi, d, p, nf, ut, pt, cf, lf, yf, pf, bf, kf, kt, er, ni, or, oe,
        se;
    i.fn = i.prototype = {
        jquery: cr, constructor: i, selector: "", length: 0, toArray: function () {
            return a.call(this)
        }, get: function (n) {
            return null != n ? 0 > n ? this[n + this.length] : this[n] : a.call(this)
        }, pushStack: function (n) {
            var t = i.merge(this.constructor(), n);
            return t.prevObject = this, t.context = this.context, t
        }, each: function (n) {
            return i.each(this, n)
        }, map: function (n) {
            return this.pushStack(i.map(this, function (t, i) {
                return n.call(t, i, t)
            }))
        }, slice: function () {
            return this.pushStack(a.apply(this, arguments))
        }, first: function () {
            return this.eq(0)
        }, last: function () {
            return this.eq(-1)
        }, eq: function (n) {
            var i = this.length, t = +n + (0 > n ? i : 0);
            return this.pushStack(t >= 0 && i > t ? [this[t]] : [])
        }, end: function () {
            return this.prevObject || this.constructor()
        }, push: ti, sort: c.sort, splice: c.splice
    };
    i.extend = i.fn.extend = function () {
        var t, e, r, f, o, s, n = arguments[0] || {}, u = 1, c = arguments.length, h = !1;
        for ("boolean" == typeof n && (h = n, n = arguments[u] || {}, u++), "object" == typeof n || i.isFunction(n) || (n = {}), u === c && (n = this, u--); c > u; u++) if (null != (o = arguments[u])) for (f in o) t = n[f], n !== (r = o[f]) && (h && r && (i.isPlainObject(r) || (e = i.isArray(r))) ? (e ? (e = !1, s = t && i.isArray(t) ? t : []) : s = t && i.isPlainObject(t) ? t : {}, n[f] = i.extend(h, s, r)) : void 0 !== r && (n[f] = r));
        return n
    };
    i.extend({
        expando: "jQuery" + (cr + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (n) {
            throw new Error(n);
        }, noop: function () {
        }, isFunction: function (n) {
            return "function" === i.type(n)
        }, isArray: Array.isArray || function (n) {
            return "array" === i.type(n)
        }, isWindow: function (n) {
            return null != n && n == n.window
        }, isNumeric: function (n) {
            var t = n && n.toString();
            return !i.isArray(n) && t - parseFloat(t) + 1 >= 0
        }, isEmptyObject: function (n) {
            for (var t in n) return !1;
            return !0
        }, isPlainObject: function (n) {
            var t;
            if (!n || "object" !== i.type(n) || n.nodeType || i.isWindow(n)) return !1;
            try {
                if (n.constructor && !tt.call(n, "constructor") && !tt.call(n.constructor.prototype, "isPrototypeOf")) return !1
            } catch (n) {
                return !1
            }
            if (!r.ownFirst) for (t in n) return tt.call(n, t);
            for (t in n) ;
            return void 0 === t || tt.call(n, t)
        }, type: function (n) {
            return null == n ? n + "" : "object" == typeof n || "function" == typeof n ? ht[he.call(n)] || "object" : typeof n
        }, globalEval: function (t) {
            t && i.trim(t) && (n.execScript || function (t) {
                n.eval.call(n, t)
            })(t)
        }, camelCase: function (n) {
            return n.replace(le, "ms-").replace(ae, ve)
        }, nodeName: function (n, t) {
            return n.nodeName && n.nodeName.toLowerCase() === t.toLowerCase()
        }, each: function (n, t) {
            var r, i = 0;
            if (ii(n)) for (r = n.length; r > i && !1 !== t.call(n[i], i, n[i]); i++) ; else for (i in n) if (!1 === t.call(n[i], i, n[i])) break;
            return n
        }, trim: function (n) {
            return null == n ? "" : (n + "").replace(ce, "")
        }, makeArray: function (n, t) {
            var r = t || [];
            return null != n && (ii(Object(n)) ? i.merge(r, "string" == typeof n ? [n] : n) : ti.call(r, n)), r
        }, inArray: function (n, t, i) {
            var r;
            if (t) {
                if (hr) return hr.call(t, n, i);
                for (r = t.length, i = i ? 0 > i ? Math.max(0, r + i) : i : 0; r > i; i++) if (i in t && t[i] === n) return i
            }
            return -1
        }, merge: function (n, t) {
            for (var r = +t.length, i = 0, u = n.length; r > i;) n[u++] = t[i++];
            if (r != r) for (; void 0 !== t[i];) n[u++] = t[i++];
            return n.length = u, n
        }, grep: function (n, t, i) {
            for (var u = [], r = 0, f = n.length, e = !i; f > r; r++) !t(n[r], r) !== e && u.push(n[r]);
            return u
        }, map: function (n, t, i) {
            var e, u, r = 0, f = [];
            if (ii(n)) for (e = n.length; e > r; r++) null != (u = t(n[r], r, i)) && f.push(u); else for (r in n) null != (u = t(n[r], r, i)) && f.push(u);
            return sr.apply([], f)
        }, guid: 1, proxy: function (n, t) {
            var r, u, f;
            return "string" == typeof t && (f = n[t], t = n, n = f), i.isFunction(n) ? (r = a.call(arguments, 2), (u = function () {
                return n.apply(t || this, r.concat(a.call(arguments)))
            }).guid = n.guid = n.guid || i.guid++, u) : void 0
        }, now: function () {
            return +new Date
        }, support: r
    });
    "function" == typeof Symbol && (i.fn[Symbol.iterator] = c[Symbol.iterator]);
    i.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (n, t) {
        ht["[object " + t + "]"] = t.toLowerCase()
    });
    w = function (n) {
        function u(n, t, r, u) {
            var l, p, a, s, nt, w, d, g, y = t && t.ownerDocument, v = t ? t.nodeType : 9;
            if (r = r || [], "string" != typeof n || !n || 1 !== v && 9 !== v && 11 !== v) return r;
            if (!u && ((t ? t.ownerDocument || t : c) !== i && b(t), t = t || i, h)) {
                if (11 !== v && (w = sr.exec(n))) if (l = w[1]) {
                    if (9 === v) {
                        if (!(a = t.getElementById(l))) return r;
                        if (a.id === l) return r.push(a), r
                    } else if (y && (a = y.getElementById(l)) && et(t, a) && a.id === l) return r.push(a), r
                } else {
                    if (w[2]) return k.apply(r, t.getElementsByTagName(n)), r;
                    if ((l = w[3]) && f.getElementsByClassName && t.getElementsByClassName) return k.apply(r, t.getElementsByClassName(l)), r
                }
                if (f.qsa && !lt[n + " "] && (!o || !o.test(n))) {
                    if (1 !== v) y = t, g = n; else if ("object" !== t.nodeName.toLowerCase()) {
                        for ((s = t.getAttribute("id")) ? s = s.replace(hr, "\\$&") : t.setAttribute("id", s = e), p = (d = ft(n)).length, nt = yi.test(s) ? "#" + s : "[id='" + s + "']"; p--;) d[p] = nt + " " + yt(d[p]);
                        g = d.join(",");
                        y = gt.test(n) && ii(t.parentNode) || t
                    }
                    if (g) try {
                        return k.apply(r, y.querySelectorAll(g)), r
                    } catch (n) {
                    } finally {
                        s === e && t.removeAttribute("id")
                    }
                }
            }
            return si(n.replace(at, "$1"), t, r, u)
        }

        function ni() {
            var n = [];
            return function i(r, u) {
                return n.push(r + " ") > t.cacheLength && delete i[n.shift()], i[r + " "] = u
            }
        }

        function l(n) {
            return n[e] = !0, n
        }

        function a(n) {
            var t = i.createElement("div");
            try {
                return !!n(t)
            } catch (n) {
                return !1
            } finally {
                t.parentNode && t.parentNode.removeChild(t);
                t = null
            }
        }

        function ti(n, i) {
            for (var r = n.split("|"), u = r.length; u--;) t.attrHandle[r[u]] = i
        }

        function wi(n, t) {
            var i = t && n,
                r = i && 1 === n.nodeType && 1 === t.nodeType && (~t.sourceIndex || li) - (~n.sourceIndex || li);
            if (r) return r;
            if (i) for (; i = i.nextSibling;) if (i === t) return -1;
            return n ? 1 : -1
        }

        function cr(n) {
            return function (t) {
                return "input" === t.nodeName.toLowerCase() && t.type === n
            }
        }

        function lr(n) {
            return function (t) {
                var i = t.nodeName.toLowerCase();
                return ("input" === i || "button" === i) && t.type === n
            }
        }

        function it(n) {
            return l(function (t) {
                return t = +t, l(function (i, r) {
                    for (var u, f = n([], i.length, t), e = f.length; e--;) i[u = f[e]] && (i[u] = !(r[u] = i[u]))
                })
            })
        }

        function ii(n) {
            return n && void 0 !== n.getElementsByTagName && n
        }

        function bi() {
        }

        function yt(n) {
            for (var t = 0, r = n.length, i = ""; r > t; t++) i += n[t].value;
            return i
        }

        function ri(n, t, i) {
            var r = t.dir, u = i && "parentNode" === r, f = ki++;
            return t.first ? function (t, i, f) {
                for (; t = t[r];) if (1 === t.nodeType || u) return n(t, i, f)
            } : function (t, i, o) {
                var s, c, l, h = [v, f];
                if (o) {
                    for (; t = t[r];) if ((1 === t.nodeType || u) && n(t, i, o)) return !0
                } else for (; t = t[r];) if (1 === t.nodeType || u) {
                    if ((s = (c = (l = t[e] || (t[e] = {}))[t.uniqueID] || (l[t.uniqueID] = {}))[r]) && s[0] === v && s[1] === f) return h[2] = s[2];
                    if (c[r] = h, h[2] = n(t, i, o)) return !0
                }
            }
        }

        function ui(n) {
            return n.length > 1 ? function (t, i, r) {
                for (var u = n.length; u--;) if (!n[u](t, i, r)) return !1;
                return !0
            } : n[0]
        }

        function pt(n, t, i, r, u) {
            for (var e, o = [], f = 0, s = n.length, h = null != t; s > f; f++) (e = n[f]) && (i && !i(e, r, u) || (o.push(e), h && t.push(f)));
            return o
        }

        function fi(n, t, i, r, f, o) {
            return r && !r[e] && (r = fi(r)), f && !f[e] && (f = fi(f, o)), l(function (e, o, s, h) {
                var a, l, v, w = [], p = [], b = o.length, d = e || function (n, t, i) {
                        for (var r = 0, f = t.length; f > r; r++) u(n, t[r], i);
                        return i
                    }(t || "*", s.nodeType ? [s] : s, []), y = !n || !e && t ? d : pt(d, w, n, s, h),
                    c = i ? f || (e ? n : b || r) ? [] : o : y;
                if (i && i(y, c, s, h), r) for (a = pt(c, p), r(a, [], s, h), l = a.length; l--;) (v = a[l]) && (c[p[l]] = !(y[p[l]] = v));
                if (e) {
                    if (f || n) {
                        if (f) {
                            for (a = [], l = c.length; l--;) (v = c[l]) && a.push(y[l] = v);
                            f(null, c = [], a, h)
                        }
                        for (l = c.length; l--;) (v = c[l]) && (a = f ? nt(e, v) : w[l]) > -1 && (e[a] = !(o[a] = v))
                    }
                } else c = pt(c === o ? c.splice(b, c.length) : c), f ? f(null, o, c, h) : k.apply(o, c)
            })
        }

        function ei(n) {
            for (var o, u, r, s = n.length, h = t.relative[n[0].type], c = h || t.relative[" "], i = h ? 1 : 0, l = ri(function (n) {
                return n === o
            }, c, !0), a = ri(function (n) {
                return nt(o, n) > -1
            }, c, !0), f = [function (n, t, i) {
                var r = !h && (i || t !== ht) || ((o = t).nodeType ? l(n, t, i) : a(n, t, i));
                return o = null, r
            }]; s > i; i++) if (u = t.relative[n[i].type]) f = [ri(ui(f), u)]; else {
                if ((u = t.filter[n[i].type].apply(null, n[i].matches))[e]) {
                    for (r = ++i; s > r && !t.relative[n[r].type]; r++) ;
                    return fi(i > 1 && ui(f), i > 1 && yt(n.slice(0, i - 1).concat({value: " " === n[i - 2].type ? "*" : ""})).replace(at, "$1"), u, r > i && ei(n.slice(i, r)), s > r && ei(n = n.slice(r)), s > r && yt(n))
                }
                f.push(u)
            }
            return ui(f)
        }

        function ar(n, r) {
            var f = r.length > 0, e = n.length > 0, o = function (o, s, c, l, a) {
                var y, nt, d, g = 0, p = "0", tt = o && [], w = [], it = ht, rt = o || e && t.find.TAG("*", a),
                    ut = v += null == it ? 1 : Math.random() || .1, ft = rt.length;
                for (a && (ht = s === i || s || a); p !== ft && null != (y = rt[p]); p++) {
                    if (e && y) {
                        for (nt = 0, s || y.ownerDocument === i || (b(y), c = !h); d = n[nt++];) if (d(y, s || i, c)) {
                            l.push(y);
                            break
                        }
                        a && (v = ut)
                    }
                    f && ((y = !d && y) && g--, o && tt.push(y))
                }
                if (g += p, f && p !== g) {
                    for (nt = 0; d = r[nt++];) d(tt, w, s, c);
                    if (o) {
                        if (g > 0) for (; p--;) tt[p] || w[p] || (w[p] = gi.call(l));
                        w = pt(w)
                    }
                    k.apply(l, w);
                    a && !o && w.length > 0 && g + r.length > 1 && u.uniqueSort(l)
                }
                return a && (v = ut, ht = it), tt
            };
            return f ? l(o) : o
        }

        var rt, f, t, st, oi, ft, wt, si, ht, w, ut, b, i, s, h, o, d, ct, et, e = "sizzle" + 1 * new Date,
            c = n.document, v = 0, ki = 0, hi = ni(), ci = ni(), lt = ni(), bt = function (n, t) {
                return n === t && (ut = !0), 0
            }, li = -2147483648, di = {}.hasOwnProperty, g = [], gi = g.pop, nr = g.push, k = g.push, ai = g.slice,
            nt = function (n, t) {
                for (var i = 0, r = n.length; r > i; i++) if (n[i] === t) return i;
                return -1
            },
            kt = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            r = "[\\x20\\t\\r\\n\\f]", tt = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
            vi = "\\[" + r + "*(" + tt + ")(?:" + r + "*([*^$|!~]?=)" + r + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + tt + "))|)" + r + "*\\]",
            dt = ":(" + tt + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + vi + ")*)|.*)\\)|)",
            tr = new RegExp(r + "+", "g"), at = new RegExp("^" + r + "+|((?:^|[^\\\\])(?:\\\\.)*)" + r + "+$", "g"),
            ir = new RegExp("^" + r + "*," + r + "*"), rr = new RegExp("^" + r + "*([>+~]|" + r + ")" + r + "*"),
            ur = new RegExp("=" + r + "*([^\\]'\"]*?)" + r + "*\\]", "g"), fr = new RegExp(dt),
            yi = new RegExp("^" + tt + "$"), vt = {
                ID: new RegExp("^#(" + tt + ")"),
                CLASS: new RegExp("^\\.(" + tt + ")"),
                TAG: new RegExp("^(" + tt + "|[*])"),
                ATTR: new RegExp("^" + vi),
                PSEUDO: new RegExp("^" + dt),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + r + "*(even|odd|(([+-]|)(\\d*)n|)" + r + "*(?:([+-]|)" + r + "*(\\d+)|))" + r + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + kt + ")$", "i"),
                needsContext: new RegExp("^" + r + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + r + "*((?:-\\d)?\\d*)" + r + "*\\)|)(?=[^-]|$)", "i")
            }, er = /^(?:input|select|textarea|button)$/i, or = /^h\d$/i, ot = /^[^{]+\{\s*\[native \w/,
            sr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, gt = /[+~]/, hr = /'|\\/g,
            y = new RegExp("\\\\([\\da-f]{1,6}" + r + "?|(" + r + ")|.)", "ig"), p = function (n, t, i) {
                var r = "0x" + t - 65536;
                return r != r || i ? t : 0 > r ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
            }, pi = function () {
                b()
            };
        try {
            k.apply(g = ai.call(c.childNodes), c.childNodes);
            g[c.childNodes.length].nodeType
        } catch (n) {
            k = {
                apply: g.length ? function (n, t) {
                    nr.apply(n, ai.call(t))
                } : function (n, t) {
                    for (var i = n.length, r = 0; n[i++] = t[r++];) ;
                    n.length = i - 1
                }
            }
        }
        for (rt in f = u.support = {}, oi = u.isXML = function (n) {
            var t = n && (n.ownerDocument || n).documentElement;
            return !!t && "HTML" !== t.nodeName
        }, b = u.setDocument = function (n) {
            var v, u, l = n ? n.ownerDocument || n : c;
            return l !== i && 9 === l.nodeType && l.documentElement ? (s = (i = l).documentElement, h = !oi(i), (u = i.defaultView) && u.top !== u && (u.addEventListener ? u.addEventListener("unload", pi, !1) : u.attachEvent && u.attachEvent("onunload", pi)), f.attributes = a(function (n) {
                return n.className = "i", !n.getAttribute("className")
            }), f.getElementsByTagName = a(function (n) {
                return n.appendChild(i.createComment("")), !n.getElementsByTagName("*").length
            }), f.getElementsByClassName = ot.test(i.getElementsByClassName), f.getById = a(function (n) {
                return s.appendChild(n).id = e, !i.getElementsByName || !i.getElementsByName(e).length
            }), f.getById ? (t.find.ID = function (n, t) {
                if (void 0 !== t.getElementById && h) {
                    var i = t.getElementById(n);
                    return i ? [i] : []
                }
            }, t.filter.ID = function (n) {
                var t = n.replace(y, p);
                return function (n) {
                    return n.getAttribute("id") === t
                }
            }) : (delete t.find.ID, t.filter.ID = function (n) {
                var t = n.replace(y, p);
                return function (n) {
                    var i = void 0 !== n.getAttributeNode && n.getAttributeNode("id");
                    return i && i.value === t
                }
            }), t.find.TAG = f.getElementsByTagName ? function (n, t) {
                return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(n) : f.qsa ? t.querySelectorAll(n) : void 0
            } : function (n, t) {
                var i, r = [], f = 0, u = t.getElementsByTagName(n);
                if ("*" === n) {
                    for (; i = u[f++];) 1 === i.nodeType && r.push(i);
                    return r
                }
                return u
            }, t.find.CLASS = f.getElementsByClassName && function (n, t) {
                if (void 0 !== t.getElementsByClassName && h) return t.getElementsByClassName(n)
            }, d = [], o = [], (f.qsa = ot.test(i.querySelectorAll)) && (a(function (n) {
                s.appendChild(n).innerHTML = "<a id='" + e + "'><\/a><select id='" + e + "-\r\\' msallowcapture=''><option selected=''><\/option><\/select>";
                n.querySelectorAll("[msallowcapture^='']").length && o.push("[*^$]=" + r + "*(?:''|\"\")");
                n.querySelectorAll("[selected]").length || o.push("\\[" + r + "*(?:value|" + kt + ")");
                n.querySelectorAll("[id~=" + e + "-]").length || o.push("~=");
                n.querySelectorAll(":checked").length || o.push(":checked");
                n.querySelectorAll("a#" + e + "+*").length || o.push(".#.+[+~]")
            }), a(function (n) {
                var t = i.createElement("input");
                t.setAttribute("type", "hidden");
                n.appendChild(t).setAttribute("name", "D");
                n.querySelectorAll("[name=d]").length && o.push("name" + r + "*[*^$|!~]?=");
                n.querySelectorAll(":enabled").length || o.push(":enabled", ":disabled");
                n.querySelectorAll("*,:x");
                o.push(",.*:")
            })), (f.matchesSelector = ot.test(ct = s.matches || s.webkitMatchesSelector || s.mozMatchesSelector || s.oMatchesSelector || s.msMatchesSelector)) && a(function (n) {
                f.disconnectedMatch = ct.call(n, "div");
                ct.call(n, "[s!='']:x");
                d.push("!=", dt)
            }), o = o.length && new RegExp(o.join("|")), d = d.length && new RegExp(d.join("|")), v = ot.test(s.compareDocumentPosition), et = v || ot.test(s.contains) ? function (n, t) {
                var r = 9 === n.nodeType ? n.documentElement : n, i = t && t.parentNode;
                return n === i || !(!i || 1 !== i.nodeType || !(r.contains ? r.contains(i) : n.compareDocumentPosition && 16 & n.compareDocumentPosition(i)))
            } : function (n, t) {
                if (t) for (; t = t.parentNode;) if (t === n) return !0;
                return !1
            }, bt = v ? function (n, t) {
                if (n === t) return ut = !0, 0;
                var r = !n.compareDocumentPosition - !t.compareDocumentPosition;
                return r || (1 & (r = (n.ownerDocument || n) === (t.ownerDocument || t) ? n.compareDocumentPosition(t) : 1) || !f.sortDetached && t.compareDocumentPosition(n) === r ? n === i || n.ownerDocument === c && et(c, n) ? -1 : t === i || t.ownerDocument === c && et(c, t) ? 1 : w ? nt(w, n) - nt(w, t) : 0 : 4 & r ? -1 : 1)
            } : function (n, t) {
                if (n === t) return ut = !0, 0;
                var r, u = 0, o = n.parentNode, s = t.parentNode, f = [n], e = [t];
                if (!o || !s) return n === i ? -1 : t === i ? 1 : o ? -1 : s ? 1 : w ? nt(w, n) - nt(w, t) : 0;
                if (o === s) return wi(n, t);
                for (r = n; r = r.parentNode;) f.unshift(r);
                for (r = t; r = r.parentNode;) e.unshift(r);
                for (; f[u] === e[u];) u++;
                return u ? wi(f[u], e[u]) : f[u] === c ? -1 : e[u] === c ? 1 : 0
            }, i) : i
        }, u.matches = function (n, t) {
            return u(n, null, null, t)
        }, u.matchesSelector = function (n, t) {
            if ((n.ownerDocument || n) !== i && b(n), t = t.replace(ur, "='$1']"), f.matchesSelector && h && !lt[t + " "] && (!d || !d.test(t)) && (!o || !o.test(t))) try {
                var r = ct.call(n, t);
                if (r || f.disconnectedMatch || n.document && 11 !== n.document.nodeType) return r
            } catch (n) {
            }
            return u(t, i, null, [n]).length > 0
        }, u.contains = function (n, t) {
            return (n.ownerDocument || n) !== i && b(n), et(n, t)
        }, u.attr = function (n, r) {
            (n.ownerDocument || n) !== i && b(n);
            var e = t.attrHandle[r.toLowerCase()],
                u = e && di.call(t.attrHandle, r.toLowerCase()) ? e(n, r, !h) : void 0;
            return void 0 !== u ? u : f.attributes || !h ? n.getAttribute(r) : (u = n.getAttributeNode(r)) && u.specified ? u.value : null
        }, u.error = function (n) {
            throw new Error("Syntax error, unrecognized expression: " + n);
        }, u.uniqueSort = function (n) {
            var r, u = [], t = 0, i = 0;
            if (ut = !f.detectDuplicates, w = !f.sortStable && n.slice(0), n.sort(bt), ut) {
                for (; r = n[i++];) r === n[i] && (t = u.push(i));
                for (; t--;) n.splice(u[t], 1)
            }
            return w = null, n
        }, st = u.getText = function (n) {
            var r, i = "", u = 0, t = n.nodeType;
            if (t) {
                if (1 === t || 9 === t || 11 === t) {
                    if ("string" == typeof n.textContent) return n.textContent;
                    for (n = n.firstChild; n; n = n.nextSibling) i += st(n)
                } else if (3 === t || 4 === t) return n.nodeValue
            } else for (; r = n[u++];) i += st(r);
            return i
        }, (t = u.selectors = {
            cacheLength: 50,
            createPseudo: l,
            match: vt,
            attrHandle: {},
            find: {},
            relative: {
                ">": {dir: "parentNode", first: !0},
                " ": {dir: "parentNode"},
                "+": {dir: "previousSibling", first: !0},
                "~": {dir: "previousSibling"}
            },
            preFilter: {
                ATTR: function (n) {
                    return n[1] = n[1].replace(y, p), n[3] = (n[3] || n[4] || n[5] || "").replace(y, p), "~=" === n[2] && (n[3] = " " + n[3] + " "), n.slice(0, 4)
                }, CHILD: function (n) {
                    return n[1] = n[1].toLowerCase(), "nth" === n[1].slice(0, 3) ? (n[3] || u.error(n[0]), n[4] = +(n[4] ? n[5] + (n[6] || 1) : 2 * ("even" === n[3] || "odd" === n[3])), n[5] = +(n[7] + n[8] || "odd" === n[3])) : n[3] && u.error(n[0]), n
                }, PSEUDO: function (n) {
                    var i, t = !n[6] && n[2];
                    return vt.CHILD.test(n[0]) ? null : (n[3] ? n[2] = n[4] || n[5] || "" : t && fr.test(t) && (i = ft(t, !0)) && (i = t.indexOf(")", t.length - i) - t.length) && (n[0] = n[0].slice(0, i), n[2] = t.slice(0, i)), n.slice(0, 3))
                }
            },
            filter: {
                TAG: function (n) {
                    var t = n.replace(y, p).toLowerCase();
                    return "*" === n ? function () {
                        return !0
                    } : function (n) {
                        return n.nodeName && n.nodeName.toLowerCase() === t
                    }
                }, CLASS: function (n) {
                    var t = hi[n + " "];
                    return t || (t = new RegExp("(^|" + r + ")" + n + "(" + r + "|$)")) && hi(n, function (n) {
                        return t.test("string" == typeof n.className && n.className || void 0 !== n.getAttribute && n.getAttribute("class") || "")
                    })
                }, ATTR: function (n, t, i) {
                    return function (r) {
                        var f = u.attr(r, n);
                        return null == f ? "!=" === t : !t || (f += "", "=" === t ? f === i : "!=" === t ? f !== i : "^=" === t ? i && 0 === f.indexOf(i) : "*=" === t ? i && f.indexOf(i) > -1 : "$=" === t ? i && f.slice(-i.length) === i : "~=" === t ? (" " + f.replace(tr, " ") + " ").indexOf(i) > -1 : "|=" === t && (f === i || f.slice(0, i.length + 1) === i + "-"))
                    }
                }, CHILD: function (n, t, i, r, u) {
                    var s = "nth" !== n.slice(0, 3), o = "last" !== n.slice(-4), f = "of-type" === t;
                    return 1 === r && 0 === u ? function (n) {
                        return !!n.parentNode
                    } : function (t, i, h) {
                        var p, d, y, c, a, w, b = s !== o ? "nextSibling" : "previousSibling", k = t.parentNode,
                            nt = f && t.nodeName.toLowerCase(), g = !h && !f, l = !1;
                        if (k) {
                            if (s) {
                                for (; b;) {
                                    for (c = t; c = c[b];) if (f ? c.nodeName.toLowerCase() === nt : 1 === c.nodeType) return !1;
                                    w = b = "only" === n && !w && "nextSibling"
                                }
                                return !0
                            }
                            if (w = [o ? k.firstChild : k.lastChild], o && g) {
                                for (l = (a = (p = (d = (y = (c = k)[e] || (c[e] = {}))[c.uniqueID] || (y[c.uniqueID] = {}))[n] || [])[0] === v && p[1]) && p[2], c = a && k.childNodes[a]; c = ++a && c && c[b] || (l = a = 0) || w.pop();) if (1 === c.nodeType && ++l && c === t) {
                                    d[n] = [v, a, l];
                                    break
                                }
                            } else if (g && (l = a = (p = (d = (y = (c = t)[e] || (c[e] = {}))[c.uniqueID] || (y[c.uniqueID] = {}))[n] || [])[0] === v && p[1]), !1 === l) for (; (c = ++a && c && c[b] || (l = a = 0) || w.pop()) && ((f ? c.nodeName.toLowerCase() !== nt : 1 !== c.nodeType) || !++l || (g && ((d = (y = c[e] || (c[e] = {}))[c.uniqueID] || (y[c.uniqueID] = {}))[n] = [v, l]), c !== t));) ;
                            return (l -= u) === r || l % r == 0 && l / r >= 0
                        }
                    }
                }, PSEUDO: function (n, i) {
                    var f, r = t.pseudos[n] || t.setFilters[n.toLowerCase()] || u.error("unsupported pseudo: " + n);
                    return r[e] ? r(i) : r.length > 1 ? (f = [n, n, "", i], t.setFilters.hasOwnProperty(n.toLowerCase()) ? l(function (n, t) {
                        for (var e, u = r(n, i), f = u.length; f--;) n[e = nt(n, u[f])] = !(t[e] = u[f])
                    }) : function (n) {
                        return r(n, 0, f)
                    }) : r
                }
            },
            pseudos: {
                not: l(function (n) {
                    var t = [], r = [], i = wt(n.replace(at, "$1"));
                    return i[e] ? l(function (n, t, r, u) {
                        for (var e, o = i(n, null, u, []), f = n.length; f--;) (e = o[f]) && (n[f] = !(t[f] = e))
                    }) : function (n, u, f) {
                        return t[0] = n, i(t, null, f, r), t[0] = null, !r.pop()
                    }
                }), has: l(function (n) {
                    return function (t) {
                        return u(n, t).length > 0
                    }
                }), contains: l(function (n) {
                    return n = n.replace(y, p), function (t) {
                        return (t.textContent || t.innerText || st(t)).indexOf(n) > -1
                    }
                }), lang: l(function (n) {
                    return yi.test(n || "") || u.error("unsupported lang: " + n), n = n.replace(y, p).toLowerCase(), function (t) {
                        var i;
                        do if (i = h ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (i = i.toLowerCase()) === n || 0 === i.indexOf(n + "-"); while ((t = t.parentNode) && 1 === t.nodeType);
                        return !1
                    }
                }), target: function (t) {
                    var i = n.location && n.location.hash;
                    return i && i.slice(1) === t.id
                }, root: function (n) {
                    return n === s
                }, focus: function (n) {
                    return n === i.activeElement && (!i.hasFocus || i.hasFocus()) && !!(n.type || n.href || ~n.tabIndex)
                }, enabled: function (n) {
                    return !1 === n.disabled
                }, disabled: function (n) {
                    return !0 === n.disabled
                }, checked: function (n) {
                    var t = n.nodeName.toLowerCase();
                    return "input" === t && !!n.checked || "option" === t && !!n.selected
                }, selected: function (n) {
                    return n.parentNode && n.parentNode.selectedIndex, !0 === n.selected
                }, empty: function (n) {
                    for (n = n.firstChild; n; n = n.nextSibling) if (n.nodeType < 6) return !1;
                    return !0
                }, parent: function (n) {
                    return !t.pseudos.empty(n)
                }, header: function (n) {
                    return or.test(n.nodeName)
                }, input: function (n) {
                    return er.test(n.nodeName)
                }, button: function (n) {
                    var t = n.nodeName.toLowerCase();
                    return "input" === t && "button" === n.type || "button" === t
                }, text: function (n) {
                    var t;
                    return "input" === n.nodeName.toLowerCase() && "text" === n.type && (null == (t = n.getAttribute("type")) || "text" === t.toLowerCase())
                }, first: it(function () {
                    return [0]
                }), last: it(function (n, t) {
                    return [t - 1]
                }), eq: it(function (n, t, i) {
                    return [0 > i ? i + t : i]
                }), even: it(function (n, t) {
                    for (var i = 0; t > i; i += 2) n.push(i);
                    return n
                }), odd: it(function (n, t) {
                    for (var i = 1; t > i; i += 2) n.push(i);
                    return n
                }), lt: it(function (n, t, i) {
                    for (var r = 0 > i ? i + t : i; --r >= 0;) n.push(r);
                    return n
                }), gt: it(function (n, t, i) {
                    for (var r = 0 > i ? i + t : i; ++r < t;) n.push(r);
                    return n
                })
            }
        }).pseudos.nth = t.pseudos.eq, {
            radio: !0,
            checkbox: !0,
            file: !0,
            password: !0,
            image: !0
        }) t.pseudos[rt] = cr(rt);
        for (rt in {submit: !0, reset: !0}) t.pseudos[rt] = lr(rt);
        return bi.prototype = t.filters = t.pseudos, t.setFilters = new bi, ft = u.tokenize = function (n, i) {
            var e, f, s, o, r, h, c, l = ci[n + " "];
            if (l) return i ? 0 : l.slice(0);
            for (r = n, h = [], c = t.preFilter; r;) {
                for (o in e && !(f = ir.exec(r)) || (f && (r = r.slice(f[0].length) || r), h.push(s = [])), e = !1, (f = rr.exec(r)) && (e = f.shift(), s.push({
                    value: e,
                    type: f[0].replace(at, " ")
                }), r = r.slice(e.length)), t.filter) (f = vt[o].exec(r)) && (!c[o] || (f = c[o](f))) && (e = f.shift(), s.push({
                    value: e,
                    type: o,
                    matches: f
                }), r = r.slice(e.length));
                if (!e) break
            }
            return i ? r.length : r ? u.error(n) : ci(n, h).slice(0)
        }, wt = u.compile = function (n, t) {
            var r, u = [], f = [], i = lt[n + " "];
            if (!i) {
                for (t || (t = ft(n)), r = t.length; r--;) (i = ei(t[r]))[e] ? u.push(i) : f.push(i);
                (i = lt(n, ar(f, u))).selector = n
            }
            return i
        }, si = u.select = function (n, i, r, u) {
            var s, e, o, a, v, l = "function" == typeof n && n, c = !u && ft(n = l.selector || n);
            if (r = r || [], 1 === c.length) {
                if ((e = c[0] = c[0].slice(0)).length > 2 && "ID" === (o = e[0]).type && f.getById && 9 === i.nodeType && h && t.relative[e[1].type]) {
                    if (!(i = (t.find.ID(o.matches[0].replace(y, p), i) || [])[0])) return r;
                    l && (i = i.parentNode);
                    n = n.slice(e.shift().value.length)
                }
                for (s = vt.needsContext.test(n) ? 0 : e.length; s-- && (o = e[s], !t.relative[a = o.type]);) if ((v = t.find[a]) && (u = v(o.matches[0].replace(y, p), gt.test(e[0].type) && ii(i.parentNode) || i))) {
                    if (e.splice(s, 1), !(n = u.length && yt(e))) return k.apply(r, u), r;
                    break
                }
            }
            return (l || wt(n, c))(u, i, !h, r, !i || gt.test(n) && ii(i.parentNode) || i), r
        }, f.sortStable = e.split("").sort(bt).join("") === e, f.detectDuplicates = !!ut, b(), f.sortDetached = a(function (n) {
            return 1 & n.compareDocumentPosition(i.createElement("div"))
        }), a(function (n) {
            return n.innerHTML = "<a href='#'><\/a>", "#" === n.firstChild.getAttribute("href")
        }) || ti("type|href|height|width", function (n, t, i) {
            if (!i) return n.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
        }), f.attributes && a(function (n) {
            return n.innerHTML = "<input/>", n.firstChild.setAttribute("value", ""), "" === n.firstChild.getAttribute("value")
        }) || ti("value", function (n, t, i) {
            if (!i && "input" === n.nodeName.toLowerCase()) return n.defaultValue
        }), a(function (n) {
            return null == n.getAttribute("disabled")
        }) || ti(kt, function (n, t, i) {
            var r;
            if (!i) return !0 === n[t] ? t.toLowerCase() : (r = n.getAttributeNode(t)) && r.specified ? r.value : null
        }), u
    }(n);
    i.find = w;
    i.expr = w.selectors;
    i.expr[":"] = i.expr.pseudos;
    i.uniqueSort = i.unique = w.uniqueSort;
    i.text = w.getText;
    i.isXMLDoc = w.isXML;
    i.contains = w.contains;
    var it = function (n, t, r) {
        for (var u = [], f = void 0 !== r; (n = n[t]) && 9 !== n.nodeType;) if (1 === n.nodeType) {
            if (f && i(n).is(r)) break;
            u.push(n)
        }
        return u
    }, lr = function (n, t) {
        for (var i = []; n; n = n.nextSibling) 1 === n.nodeType && n !== t && i.push(n);
        return i
    }, ar = i.expr.match.needsContext, vr = /^<([\w-]+)\s*\/?>(?:<\/\1>|)$/, ye = /^.[^:#\[\.,]*$/;
    i.filter = function (n, t, r) {
        var u = t[0];
        return r && (n = ":not(" + n + ")"), 1 === t.length && 1 === u.nodeType ? i.find.matchesSelector(u, n) ? [u] : [] : i.find.matches(n, i.grep(t, function (n) {
            return 1 === n.nodeType
        }))
    };
    i.fn.extend({
        find: function (n) {
            var t, r = [], u = this, f = u.length;
            if ("string" != typeof n) return this.pushStack(i(n).filter(function () {
                for (t = 0; f > t; t++) if (i.contains(u[t], this)) return !0
            }));
            for (t = 0; f > t; t++) i.find(n, u[t], r);
            return (r = this.pushStack(f > 1 ? i.unique(r) : r)).selector = this.selector ? this.selector + " " + n : n, r
        }, filter: function (n) {
            return this.pushStack(ri(this, n || [], !1))
        }, not: function (n) {
            return this.pushStack(ri(this, n || [], !0))
        }, is: function (n) {
            return !!ri(this, "string" == typeof n && ar.test(n) ? i(n) : n || [], !1).length
        }
    });
    yr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/;
    (i.fn.init = function (n, t, r) {
        var f, e;
        if (!n) return this;
        if (r = r || ui, "string" == typeof n) {
            if (!(f = "<" === n.charAt(0) && ">" === n.charAt(n.length - 1) && n.length >= 3 ? [null, n, null] : yr.exec(n)) || !f[1] && t) return !t || t.jquery ? (t || r).find(n) : this.constructor(t).find(n);
            if (f[1]) {
                if (t = t instanceof i ? t[0] : t, i.merge(this, i.parseHTML(f[1], t && t.nodeType ? t.ownerDocument || t : u, !0)), vr.test(f[1]) && i.isPlainObject(t)) for (f in t) i.isFunction(this[f]) ? this[f](t[f]) : this.attr(f, t[f]);
                return this
            }
            if ((e = u.getElementById(f[2])) && e.parentNode) {
                if (e.id !== f[2]) return ui.find(n);
                this.length = 1;
                this[0] = e
            }
            return this.context = u, this.selector = n, this
        }
        return n.nodeType ? (this.context = this[0] = n, this.length = 1, this) : i.isFunction(n) ? void 0 !== r.ready ? r.ready(n) : n(i) : (void 0 !== n.selector && (this.selector = n.selector, this.context = n.context), i.makeArray(n, this))
    }).prototype = i.fn;
    ui = i(u);
    pr = /^(?:parents|prev(?:Until|All))/;
    wr = {children: !0, contents: !0, next: !0, prev: !0};
    i.fn.extend({
        has: function (n) {
            var t, r = i(n, this), u = r.length;
            return this.filter(function () {
                for (t = 0; u > t; t++) if (i.contains(this, r[t])) return !0
            })
        }, closest: function (n, t) {
            for (var r, f = 0, o = this.length, u = [], e = ar.test(n) || "string" != typeof n ? i(n, t || this.context) : 0; o > f; f++) for (r = this[f]; r && r !== t; r = r.parentNode) if (r.nodeType < 11 && (e ? e.index(r) > -1 : 1 === r.nodeType && i.find.matchesSelector(r, n))) {
                u.push(r);
                break
            }
            return this.pushStack(u.length > 1 ? i.uniqueSort(u) : u)
        }, index: function (n) {
            return n ? "string" == typeof n ? i.inArray(this[0], i(n)) : i.inArray(n.jquery ? n[0] : n, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        }, add: function (n, t) {
            return this.pushStack(i.uniqueSort(i.merge(this.get(), i(n, t))))
        }, addBack: function (n) {
            return this.add(null == n ? this.prevObject : this.prevObject.filter(n))
        }
    });
    i.each({
        parent: function (n) {
            var t = n.parentNode;
            return t && 11 !== t.nodeType ? t : null
        }, parents: function (n) {
            return it(n, "parentNode")
        }, parentsUntil: function (n, t, i) {
            return it(n, "parentNode", i)
        }, next: function (n) {
            return br(n, "nextSibling")
        }, prev: function (n) {
            return br(n, "previousSibling")
        }, nextAll: function (n) {
            return it(n, "nextSibling")
        }, prevAll: function (n) {
            return it(n, "previousSibling")
        }, nextUntil: function (n, t, i) {
            return it(n, "nextSibling", i)
        }, prevUntil: function (n, t, i) {
            return it(n, "previousSibling", i)
        }, siblings: function (n) {
            return lr((n.parentNode || {}).firstChild, n)
        }, children: function (n) {
            return lr(n.firstChild)
        }, contents: function (n) {
            return i.nodeName(n, "iframe") ? n.contentDocument || n.contentWindow.document : i.merge([], n.childNodes)
        }
    }, function (n, t) {
        i.fn[n] = function (r, u) {
            var f = i.map(this, t, r);
            return "Until" !== n.slice(-5) && (u = r), u && "string" == typeof u && (f = i.filter(u, f)), this.length > 1 && (wr[n] || (f = i.uniqueSort(f)), pr.test(n) && (f = f.reverse())), this.pushStack(f)
        }
    });
    s = /\S+/g;
    for (kr in i.Callbacks = function (n) {
        n = "string" == typeof n ? function (n) {
            var t = {};
            return i.each(n.match(s) || [], function (n, i) {
                t[i] = !0
            }), t
        }(n) : i.extend({}, n);
        var f, r, c, e, t = [], o = [], u = -1, l = function () {
            for (e = n.once, c = f = !0; o.length; u = -1) for (r = o.shift(); ++u < t.length;) !1 === t[u].apply(r[0], r[1]) && n.stopOnFalse && (u = t.length, r = !1);
            n.memory || (r = !1);
            f = !1;
            e && (t = r ? [] : "")
        }, h = {
            add: function () {
                return t && (r && !f && (u = t.length - 1, o.push(r)), function f(r) {
                    i.each(r, function (r, u) {
                        i.isFunction(u) ? n.unique && h.has(u) || t.push(u) : u && u.length && "string" !== i.type(u) && f(u)
                    })
                }(arguments), r && !f && l()), this
            }, remove: function () {
                return i.each(arguments, function (n, r) {
                    for (var f; (f = i.inArray(r, t, f)) > -1;) t.splice(f, 1), u >= f && u--
                }), this
            }, has: function (n) {
                return n ? i.inArray(n, t) > -1 : t.length > 0
            }, empty: function () {
                return t && (t = []), this
            }, disable: function () {
                return e = o = [], t = r = "", this
            }, disabled: function () {
                return !t
            }, lock: function () {
                return e = !0, r || h.disable(), this
            }, locked: function () {
                return !!e
            }, fireWith: function (n, t) {
                return e || (t = [n, (t = t || []).slice ? t.slice() : t], o.push(t), f || l()), this
            }, fire: function () {
                return h.fireWith(this, arguments), this
            }, fired: function () {
                return !!c
            }
        };
        return h
    }, i.extend({
        Deferred: function (n) {
            var u = [["resolve", "done", i.Callbacks("once memory"), "resolved"], ["reject", "fail", i.Callbacks("once memory"), "rejected"], ["notify", "progress", i.Callbacks("memory")]],
                f = "pending", r = {
                    state: function () {
                        return f
                    }, always: function () {
                        return t.done(arguments).fail(arguments), this
                    }, then: function () {
                        var n = arguments;
                        return i.Deferred(function (f) {
                            i.each(u, function (u, e) {
                                var o = i.isFunction(n[u]) && n[u];
                                t[e[1]](function () {
                                    var n = o && o.apply(this, arguments);
                                    n && i.isFunction(n.promise) ? n.promise().progress(f.notify).done(f.resolve).fail(f.reject) : f[e[0] + "With"](this === r ? f.promise() : this, o ? [n] : arguments)
                                })
                            });
                            n = null
                        }).promise()
                    }, promise: function (n) {
                        return null != n ? i.extend(n, r) : r
                    }
                }, t = {};
            return r.pipe = r.then, i.each(u, function (n, i) {
                var e = i[2], o = i[3];
                r[i[1]] = e.add;
                o && e.add(function () {
                    f = o
                }, u[1 ^ n][2].disable, u[2][2].lock);
                t[i[0]] = function () {
                    return t[i[0] + "With"](this === t ? r : this, arguments), this
                };
                t[i[0] + "With"] = e.fireWith
            }), r.promise(t), n && n.call(t, t), t
        }, when: function (n) {
            var o, h, s, t = 0, u = a.call(arguments), r = u.length,
                e = 1 !== r || n && i.isFunction(n.promise) ? r : 0, f = 1 === e ? n : i.Deferred(),
                c = function (n, t, i) {
                    return function (r) {
                        t[n] = this;
                        i[n] = arguments.length > 1 ? a.call(arguments) : r;
                        i === o ? f.notifyWith(t, i) : --e || f.resolveWith(t, i)
                    }
                };
            if (r > 1) for (o = new Array(r), h = new Array(r), s = new Array(r); r > t; t++) u[t] && i.isFunction(u[t].promise) ? u[t].promise().progress(c(t, h, o)).done(c(t, s, u)).fail(f.reject) : --e;
            return e || f.resolveWith(s, u), f.promise()
        }
    }), i.fn.ready = function (n) {
        return i.ready.promise().done(n), this
    }, i.extend({
        isReady: !1, readyWait: 1, holdReady: function (n) {
            n ? i.readyWait++ : i.ready(!0)
        }, ready: function (n) {
            (!0 === n ? --i.readyWait : i.isReady) || (i.isReady = !0, !0 !== n && --i.readyWait > 0 || (ct.resolveWith(u, [i]), i.fn.triggerHandler && (i(u).triggerHandler("ready"), i(u).off("ready"))))
        }
    }), i.ready.promise = function (t) {
        if (!ct) if (ct = i.Deferred(), "complete" !== u.readyState && ("loading" === u.readyState || u.documentElement.doScroll)) if (u.addEventListener) u.addEventListener("DOMContentLoaded", v), n.addEventListener("load", v); else {
            u.attachEvent("onreadystatechange", v);
            n.attachEvent("onload", v);
            var r = !1;
            try {
                r = null == n.frameElement && u.documentElement
            } catch (n) {
            }
            r && r.doScroll && function t() {
                if (!i.isReady) {
                    try {
                        r.doScroll("left")
                    } catch (r) {
                        return n.setTimeout(t, 50)
                    }
                    dr();
                    i.ready()
                }
            }()
        } else n.setTimeout(i.ready);
        return ct.promise(t)
    }, i.ready.promise(), i(r)) break;
    r.ownFirst = "0" === kr;
    r.inlineBlockNeedsLayout = !1;
    i(function () {
        var f, n, t, i;
        (t = u.getElementsByTagName("body")[0]) && t.style && (n = u.createElement("div"), (i = u.createElement("div")).style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", t.appendChild(i).appendChild(n), void 0 !== n.style.zoom && (n.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1", r.inlineBlockNeedsLayout = f = 3 === n.offsetWidth, f && (t.style.zoom = 1)), t.removeChild(i))
    }), function () {
        var n = u.createElement("div");
        r.deleteExpando = !0;
        try {
            delete n.test
        } catch (n) {
            r.deleteExpando = !1
        }
        n = null
    }();
    var ot = function (n) {
        var t = i.noData[(n.nodeName + " ").toLowerCase()], r = +n.nodeType || 1;
        return (1 === r || 9 === r) && (!t || !0 !== t && n.getAttribute("classid") === t)
    }, pe = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, we = /([A-Z])/g;
    i.extend({
        cache: {},
        noData: {"applet ": !0, "embed ": !0, "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},
        hasData: function (n) {
            return !!(n = n.nodeType ? i.cache[n[i.expando]] : n[i.expando]) && !fi(n)
        },
        data: function (n, t, i) {
            return nu(n, t, i)
        },
        removeData: function (n, t) {
            return tu(n, t)
        },
        _data: function (n, t, i) {
            return nu(n, t, i, !0)
        },
        _removeData: function (n, t) {
            return tu(n, t, !0)
        }
    });
    i.fn.extend({
        data: function (n, t) {
            var u, f, e, r = this[0], o = r && r.attributes;
            if (void 0 === n) {
                if (this.length && (e = i.data(r), 1 === r.nodeType && !i._data(r, "parsedAttrs"))) {
                    for (u = o.length; u--;) o[u] && 0 === (f = o[u].name).indexOf("data-") && gr(r, f = i.camelCase(f.slice(5)), e[f]);
                    i._data(r, "parsedAttrs", !0)
                }
                return e
            }
            return "object" == typeof n ? this.each(function () {
                i.data(this, n)
            }) : arguments.length > 1 ? this.each(function () {
                i.data(this, n, t)
            }) : r ? gr(r, n, i.data(r, n)) : void 0
        }, removeData: function (n) {
            return this.each(function () {
                i.removeData(this, n)
            })
        }
    });
    i.extend({
        queue: function (n, t, r) {
            var u;
            if (n) return (t = (t || "fx") + "queue", u = i._data(n, t), r && (!u || i.isArray(r) ? u = i._data(n, t, i.makeArray(r)) : u.push(r)), u || [])
        }, dequeue: function (n, t) {
            t = t || "fx";
            var r = i.queue(n, t), e = r.length, u = r.shift(), f = i._queueHooks(n, t);
            "inprogress" === u && (u = r.shift(), e--);
            u && ("fx" === t && r.unshift("inprogress"), delete f.stop, u.call(n, function () {
                i.dequeue(n, t)
            }, f));
            !e && f && f.empty.fire()
        }, _queueHooks: function (n, t) {
            var r = t + "queueHooks";
            return i._data(n, r) || i._data(n, r, {
                empty: i.Callbacks("once memory").add(function () {
                    i._removeData(n, t + "queue");
                    i._removeData(n, r)
                })
            })
        }
    });
    i.fn.extend({
        queue: function (n, t) {
            var r = 2;
            return "string" != typeof n && (t = n, n = "fx", r--), arguments.length < r ? i.queue(this[0], n) : void 0 === t ? this : this.each(function () {
                var r = i.queue(this, n, t);
                i._queueHooks(this, n);
                "fx" === n && "inprogress" !== r[0] && i.dequeue(this, n)
            })
        }, dequeue: function (n) {
            return this.each(function () {
                i.dequeue(this, n)
            })
        }, clearQueue: function (n) {
            return this.queue(n || "fx", [])
        }, promise: function (n, t) {
            var r, f = 1, e = i.Deferred(), u = this, o = this.length, s = function () {
                --f || e.resolveWith(u, [u])
            };
            for ("string" != typeof n && (t = n, n = void 0), n = n || "fx"; o--;) (r = i._data(u[o], n + "queueHooks")) && r.empty && (f++, r.empty.add(s));
            return s(), e.promise(t)
        }
    }), function () {
        var n;
        r.shrinkWrapBlocks = function () {
            return null != n ? n : (n = !1, (i = u.getElementsByTagName("body")[0]) && i.style ? (t = u.createElement("div"), (r = u.createElement("div")).style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", i.appendChild(r).appendChild(t), void 0 !== t.style.zoom && (t.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1", t.appendChild(u.createElement("div")).style.width = "5px", n = 3 !== t.offsetWidth), i.removeChild(r), n) : void 0);
            var t, i, r
        }
    }();
    var ei = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source, oi = new RegExp("^(?:([+-])=|)(" + ei + ")([a-z%]*)$", "i"),
        b = ["Top", "Right", "Bottom", "Left"], st = function (n, t) {
            return n = t || n, "none" === i.css(n, "display") || !i.contains(n.ownerDocument, n)
        };
    var y = function (n, t, r, u, f, e, o) {
            var s = 0, c = n.length, h = null == r;
            if ("object" === i.type(r)) for (s in f = !0, r) y(n, t, s, r[s], !0, e, o); else if (void 0 !== u && (f = !0, i.isFunction(u) || (o = !0), h && (o ? (t.call(n, u), t = null) : (h = t, t = function (n, t, r) {
                return h.call(i(n), r)
            })), t)) for (; c > s; s++) t(n[s], r, o ? u : u.call(n[s], s, t(n[s], r)));
            return f ? n : h ? t.call(n) : c ? t(n[0], r) : e
        }, si = /^(?:checkbox|radio)$/i, ru = /<([\w:-]+)/, uu = /^$|\/(?:java|ecma)script/i, hi = /^\s+/,
        fu = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|dialog|figcaption|figure|footer|header|hgroup|main|mark|meter|nav|output|picture|progress|section|summary|template|time|video";
    !function () {
        var n = u.createElement("div"), f = u.createDocumentFragment(), t = u.createElement("input");
        n.innerHTML = "  <link/><table><\/table><a href='/a'>a<\/a><input type='checkbox'/>";
        r.leadingWhitespace = 3 === n.firstChild.nodeType;
        r.tbody = !n.getElementsByTagName("tbody").length;
        r.htmlSerialize = !!n.getElementsByTagName("link").length;
        r.html5Clone = "<:nav><\/:nav>" !== u.createElement("nav").cloneNode(!0).outerHTML;
        t.type = "checkbox";
        t.checked = !0;
        f.appendChild(t);
        r.appendChecked = t.checked;
        n.innerHTML = "<textarea>x<\/textarea>";
        r.noCloneChecked = !!n.cloneNode(!0).lastChild.defaultValue;
        f.appendChild(n);
        (t = u.createElement("input")).setAttribute("type", "radio");
        t.setAttribute("checked", "checked");
        t.setAttribute("name", "t");
        n.appendChild(t);
        r.checkClone = n.cloneNode(!0).cloneNode(!0).lastChild.checked;
        r.noCloneEvent = !!n.addEventListener;
        n[i.expando] = 1;
        r.attributes = !n.getAttribute(i.expando)
    }();
    o = {
        option: [1, "<select multiple='multiple'>", "<\/select>"],
        legend: [1, "<fieldset>", "<\/fieldset>"],
        area: [1, "<map>", "<\/map>"],
        param: [1, "<object>", "<\/object>"],
        thead: [1, "<table>", "<\/table>"],
        tr: [2, "<table><tbody>", "<\/tbody><\/table>"],
        col: [2, "<table><tbody><\/tbody><colgroup>", "<\/colgroup><\/table>"],
        td: [3, "<table><tbody><tr>", "<\/tr><\/tbody><\/table>"],
        _default: r.htmlSerialize ? [0, "", ""] : [1, "X<div>", "<\/div>"]
    };
    o.optgroup = o.option;
    o.tbody = o.tfoot = o.colgroup = o.caption = o.thead;
    o.th = o.td;
    ou = /<|&#?\w+;/;
    li = /<tbody/i;
    !function () {
        var t, i, f = u.createElement("div");
        for (t in {
            submit: !0,
            change: !0,
            focusin: !0
        }) i = "on" + t, (r[t] = i in n) || (f.setAttribute(i, "t"), r[t] = !1 === f.attributes[i].expando);
        f = null
    }();
    var ai = /^(?:input|select|textarea)$/i, ke = /^key/, de = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        hu = /^(?:focusinfocus|focusoutblur)$/, cu = /^([^.]*)(?:\.(.+)|)/;
    i.event = {
        global: {},
        add: function (n, t, r, u, f) {
            var b, v, y, p, o, h, c, l, e, w, k, a = i._data(n);
            if (a) {
                for (r.handler && (r = (p = r).handler, f = p.selector), r.guid || (r.guid = i.guid++), (v = a.events) || (v = a.events = {}), (h = a.handle) || ((h = a.handle = function (n) {
                    if (void 0 !== i && (!n || i.event.triggered !== n.type)) return i.event.dispatch.apply(h.elem, arguments)
                }).elem = n), y = (t = (t || "").match(s) || [""]).length; y--;) e = k = (b = cu.exec(t[y]) || [])[1], w = (b[2] || "").split(".").sort(), e && (o = i.event.special[e] || {}, e = (f ? o.delegateType : o.bindType) || e, o = i.event.special[e] || {}, c = i.extend({
                    type: e,
                    origType: k,
                    data: u,
                    handler: r,
                    guid: r.guid,
                    selector: f,
                    needsContext: f && i.expr.match.needsContext.test(f),
                    namespace: w.join(".")
                }, p), (l = v[e]) || ((l = v[e] = []).delegateCount = 0, o.setup && !1 !== o.setup.call(n, u, w, h) || (n.addEventListener ? n.addEventListener(e, h, !1) : n.attachEvent && n.attachEvent("on" + e, h))), o.add && (o.add.call(n, c), c.handler.guid || (c.handler.guid = r.guid)), f ? l.splice(l.delegateCount++, 0, c) : l.push(c), i.event.global[e] = !0);
                n = null
            }
        },
        remove: function (n, t, r, u, f) {
            var y, o, c, b, p, a, h, l, e, w, k, v = i.hasData(n) && i._data(n);
            if (v && (a = v.events)) {
                for (p = (t = (t || "").match(s) || [""]).length; p--;) if (e = k = (c = cu.exec(t[p]) || [])[1], w = (c[2] || "").split(".").sort(), e) {
                    for (h = i.event.special[e] || {}, l = a[e = (u ? h.delegateType : h.bindType) || e] || [], c = c[2] && new RegExp("(^|\\.)" + w.join("\\.(?:.*\\.|)") + "(\\.|$)"), b = y = l.length; y--;) o = l[y], !f && k !== o.origType || r && r.guid !== o.guid || c && !c.test(o.namespace) || u && u !== o.selector && ("**" !== u || !o.selector) || (l.splice(y, 1), o.selector && l.delegateCount--, h.remove && h.remove.call(n, o));
                    b && !l.length && (h.teardown && !1 !== h.teardown.call(n, w, v.handle) || i.removeEvent(n, e, v.handle), delete a[e])
                } else for (e in a) i.event.remove(n, e + t[p], r, u, !0);
                i.isEmptyObject(a) && (delete v.handle, i._removeData(n, "events"))
            }
        },
        trigger: function (t, r, f, e) {
            var a, l, o, p, h, c, w, y = [f || u], s = tt.call(t, "type") ? t.type : t,
                v = tt.call(t, "namespace") ? t.namespace.split(".") : [];
            if (o = c = f = f || u, 3 !== f.nodeType && 8 !== f.nodeType && !hu.test(s + i.event.triggered) && (s.indexOf(".") > -1 && (v = s.split("."), s = v.shift(), v.sort()), l = s.indexOf(":") < 0 && "on" + s, (t = t[i.expando] ? t : new i.Event(s, "object" == typeof t && t)).isTrigger = e ? 2 : 3, t.namespace = v.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + v.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = f), r = null == r ? [t] : i.makeArray(r, [t]), h = i.event.special[s] || {}, e || !h.trigger || !1 !== h.trigger.apply(f, r))) {
                if (!e && !h.noBubble && !i.isWindow(f)) {
                    for (p = h.delegateType || s, hu.test(p + s) || (o = o.parentNode); o; o = o.parentNode) y.push(o), c = o;
                    c === (f.ownerDocument || u) && y.push(c.defaultView || c.parentWindow || n)
                }
                for (w = 0; (o = y[w++]) && !t.isPropagationStopped();) t.type = w > 1 ? p : h.bindType || s, (a = (i._data(o, "events") || {})[t.type] && i._data(o, "handle")) && a.apply(o, r), (a = l && o[l]) && a.apply && ot(o) && (t.result = a.apply(o, r), !1 === t.result && t.preventDefault());
                if (t.type = s, !e && !t.isDefaultPrevented() && (!h._default || !1 === h._default.apply(y.pop(), r)) && ot(f) && l && f[s] && !i.isWindow(f)) {
                    (c = f[l]) && (f[l] = null);
                    i.event.triggered = s;
                    try {
                        f[s]()
                    } catch (n) {
                    }
                    i.event.triggered = void 0;
                    c && (f[l] = c)
                }
                return t.result
            }
        },
        dispatch: function (n) {
            n = i.event.fix(n);
            var f, e, o, r, t, s = [], h = a.call(arguments), c = (i._data(this, "events") || {})[n.type] || [],
                u = i.event.special[n.type] || {};
            if (h[0] = n, n.delegateTarget = this, !u.preDispatch || !1 !== u.preDispatch.call(this, n)) {
                for (s = i.event.handlers.call(this, n, c), f = 0; (r = s[f++]) && !n.isPropagationStopped();) for (n.currentTarget = r.elem, e = 0; (t = r.handlers[e++]) && !n.isImmediatePropagationStopped();) n.rnamespace && !n.rnamespace.test(t.namespace) || (n.handleObj = t, n.data = t.data, void 0 !== (o = ((i.event.special[t.origType] || {}).handle || t.handler).apply(r.elem, h)) && !1 === (n.result = o) && (n.preventDefault(), n.stopPropagation()));
                return u.postDispatch && u.postDispatch.call(this, n), n.result
            }
        },
        handlers: function (n, t) {
            var e, u, f, s, h = [], o = t.delegateCount, r = n.target;
            if (o && r.nodeType && ("click" !== n.type || isNaN(n.button) || n.button < 1)) for (; r != this; r = r.parentNode || this) if (1 === r.nodeType && (!0 !== r.disabled || "click" !== n.type)) {
                for (u = [], e = 0; o > e; e++) void 0 === u[f = (s = t[e]).selector + " "] && (u[f] = s.needsContext ? i(f, this).index(r) > -1 : i.find(f, this, null, [r]).length), u[f] && u.push(s);
                u.length && h.push({elem: r, handlers: u})
            }
            return o < t.length && h.push({elem: this, handlers: t.slice(o)}), h
        },
        fix: function (n) {
            if (n[i.expando]) return n;
            var e, s, o, r = n.type, f = n, t = this.fixHooks[r];
            for (t || (this.fixHooks[r] = t = de.test(r) ? this.mouseHooks : ke.test(r) ? this.keyHooks : {}), o = t.props ? this.props.concat(t.props) : this.props, n = new i.Event(f), e = o.length; e--;) n[s = o[e]] = f[s];
            return n.target || (n.target = f.srcElement || u), 3 === n.target.nodeType && (n.target = n.target.parentNode), n.metaKey = !!n.metaKey, t.filter ? t.filter(n, f) : n
        },
        props: "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
        fixHooks: {},
        keyHooks: {
            props: "char charCode key keyCode".split(" "), filter: function (n, t) {
                return null == n.which && (n.which = null != t.charCode ? t.charCode : t.keyCode), n
            }
        },
        mouseHooks: {
            props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
            filter: function (n, t) {
                var i, o, r, f = t.button, e = t.fromElement;
                return null == n.pageX && null != t.clientX && (r = (o = n.target.ownerDocument || u).documentElement, i = o.body, n.pageX = t.clientX + (r && r.scrollLeft || i && i.scrollLeft || 0) - (r && r.clientLeft || i && i.clientLeft || 0), n.pageY = t.clientY + (r && r.scrollTop || i && i.scrollTop || 0) - (r && r.clientTop || i && i.clientTop || 0)), !n.relatedTarget && e && (n.relatedTarget = e === n.target ? t.toElement : e), n.which || void 0 === f || (n.which = 1 & f ? 1 : 2 & f ? 3 : 4 & f ? 2 : 0), n
            }
        },
        special: {
            load: {noBubble: !0}, focus: {
                trigger: function () {
                    if (this !== lu() && this.focus) try {
                        return this.focus(), !1
                    } catch (n) {
                    }
                }, delegateType: "focusin"
            }, blur: {
                trigger: function () {
                    if (this === lu() && this.blur) return (this.blur(), !1)
                }, delegateType: "focusout"
            }, click: {
                trigger: function () {
                    if (i.nodeName(this, "input") && "checkbox" === this.type && this.click) return (this.click(), !1)
                }, _default: function (n) {
                    return i.nodeName(n.target, "a")
                }
            }, beforeunload: {
                postDispatch: function (n) {
                    void 0 !== n.result && n.originalEvent && (n.originalEvent.returnValue = n.result)
                }
            }
        },
        simulate: function (n, t, r) {
            var u = i.extend(new i.Event, r, {type: n, isSimulated: !0});
            i.event.trigger(u, null, t);
            u.isDefaultPrevented() && r.preventDefault()
        }
    };
    i.removeEvent = u.removeEventListener ? function (n, t, i) {
        n.removeEventListener && n.removeEventListener(t, i)
    } : function (n, t, i) {
        var r = "on" + t;
        n.detachEvent && (void 0 === n[r] && (n[r] = null), n.detachEvent(r, i))
    };
    i.Event = function (n, t) {
        return this instanceof i.Event ? (n && n.type ? (this.originalEvent = n, this.type = n.type, this.isDefaultPrevented = n.defaultPrevented || void 0 === n.defaultPrevented && !1 === n.returnValue ? lt : rt) : this.type = n, t && i.extend(this, t), this.timeStamp = n && n.timeStamp || i.now(), void (this[i.expando] = !0)) : new i.Event(n, t)
    };
    i.Event.prototype = {
        constructor: i.Event,
        isDefaultPrevented: rt,
        isPropagationStopped: rt,
        isImmediatePropagationStopped: rt,
        preventDefault: function () {
            var n = this.originalEvent;
            this.isDefaultPrevented = lt;
            n && (n.preventDefault ? n.preventDefault() : n.returnValue = !1)
        },
        stopPropagation: function () {
            var n = this.originalEvent;
            this.isPropagationStopped = lt;
            n && !this.isSimulated && (n.stopPropagation && n.stopPropagation(), n.cancelBubble = !0)
        },
        stopImmediatePropagation: function () {
            var n = this.originalEvent;
            this.isImmediatePropagationStopped = lt;
            n && n.stopImmediatePropagation && n.stopImmediatePropagation();
            this.stopPropagation()
        }
    };
    i.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function (n, t) {
        i.event.special[n] = {
            delegateType: t, bindType: t, handle: function (n) {
                var u, f = this, r = n.relatedTarget, e = n.handleObj;
                return r && (r === f || i.contains(f, r)) || (n.type = e.origType, u = e.handler.apply(this, arguments), n.type = t), u
            }
        }
    });
    r.submit || (i.event.special.submit = {
        setup: function () {
            return !i.nodeName(this, "form") && void i.event.add(this, "click._submit keypress._submit", function (n) {
                var r = n.target, t = i.nodeName(r, "input") || i.nodeName(r, "button") ? i.prop(r, "form") : void 0;
                t && !i._data(t, "submit") && (i.event.add(t, "submit._submit", function (n) {
                    n._submitBubble = !0
                }), i._data(t, "submit", !0))
            })
        }, postDispatch: function (n) {
            n._submitBubble && (delete n._submitBubble, this.parentNode && !n.isTrigger && i.event.simulate("submit", this.parentNode, n))
        }, teardown: function () {
            return !i.nodeName(this, "form") && void i.event.remove(this, "._submit")
        }
    });
    r.change || (i.event.special.change = {
        setup: function () {
            return ai.test(this.nodeName) ? ("checkbox" !== this.type && "radio" !== this.type || (i.event.add(this, "propertychange._change", function (n) {
                "checked" === n.originalEvent.propertyName && (this._justChanged = !0)
            }), i.event.add(this, "click._change", function (n) {
                this._justChanged && !n.isTrigger && (this._justChanged = !1);
                i.event.simulate("change", this, n)
            })), !1) : void i.event.add(this, "beforeactivate._change", function (n) {
                var t = n.target;
                ai.test(t.nodeName) && !i._data(t, "change") && (i.event.add(t, "change._change", function (n) {
                    !this.parentNode || n.isSimulated || n.isTrigger || i.event.simulate("change", this.parentNode, n)
                }), i._data(t, "change", !0))
            })
        }, handle: function (n) {
            var t = n.target;
            if (this !== t || n.isSimulated || n.isTrigger || "radio" !== t.type && "checkbox" !== t.type) return n.handleObj.handler.apply(this, arguments)
        }, teardown: function () {
            return i.event.remove(this, "._change"), !ai.test(this.nodeName)
        }
    });
    r.focusin || i.each({focus: "focusin", blur: "focusout"}, function (n, t) {
        var r = function (n) {
            i.event.simulate(t, n.target, i.event.fix(n))
        };
        i.event.special[t] = {
            setup: function () {
                var u = this.ownerDocument || this, f = i._data(u, t);
                f || u.addEventListener(n, r, !0);
                i._data(u, t, (f || 0) + 1)
            }, teardown: function () {
                var u = this.ownerDocument || this, f = i._data(u, t) - 1;
                f ? i._data(u, t, f) : (u.removeEventListener(n, r, !0), i._removeData(u, t))
            }
        }
    });
    i.fn.extend({
        on: function (n, t, i, r) {
            return vi(this, n, t, i, r)
        }, one: function (n, t, i, r) {
            return vi(this, n, t, i, r, 1)
        }, off: function (n, t, r) {
            var u, f;
            if (n && n.preventDefault && n.handleObj) return u = n.handleObj, i(n.delegateTarget).off(u.namespace ? u.origType + "." + u.namespace : u.origType, u.selector, u.handler), this;
            if ("object" == typeof n) {
                for (f in n) this.off(f, t, n[f]);
                return this
            }
            return !1 !== t && "function" != typeof t || (r = t, t = void 0), !1 === r && (r = rt), this.each(function () {
                i.event.remove(this, n, r, t)
            })
        }, trigger: function (n, t) {
            return this.each(function () {
                i.event.trigger(n, t, this)
            })
        }, triggerHandler: function (n, t) {
            var r = this[0];
            if (r) return i.event.trigger(n, t, r, !0)
        }
    });
    var ge = / jQuery\d+="(?:null|\d+)"/g, au = new RegExp("<(?:" + fu + ")[\\s/>]", "i"),
        no = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi, to = /<script|<style|<link/i,
        io = /checked\s*(?:[^=]|=\s*.checked.)/i, ro = /^true\/(.*)/, uo = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
        yi = eu(u).appendChild(u.createElement("div"));
    i.extend({
        htmlPrefilter: function (n) {
            return n.replace(no, "<$1><\/$2>")
        }, clone: function (n, t, u) {
            var e, c, s, o, h, l = i.contains(n.ownerDocument, n);
            if (r.html5Clone || i.isXMLDoc(n) || !au.test("<" + n.nodeName + ">") ? s = n.cloneNode(!0) : (yi.innerHTML = n.outerHTML, yi.removeChild(s = yi.firstChild)), !(r.noCloneEvent && r.noCloneChecked || 1 !== n.nodeType && 11 !== n.nodeType || i.isXMLDoc(n))) for (e = f(s), h = f(n), o = 0; null != (c = h[o]); ++o) e[o] && fo(c, e[o]);
            if (t) if (u) for (h = h || f(n), e = e || f(s), o = 0; null != (c = h[o]); o++) wu(c, e[o]); else wu(n, s);
            return (e = f(s, "script")).length > 0 && ci(e, !l && f(n, "script")), e = h = c = null, s
        }, cleanData: function (n, t) {
            for (var u, e, f, o, l = 0, s = i.expando, h = i.cache, a = r.attributes, v = i.event.special; null != (u = n[l]); l++) if ((t || ot(u)) && (o = (f = u[s]) && h[f])) {
                if (o.events) for (e in o.events) v[e] ? i.event.remove(u, e) : i.removeEvent(u, e, o.handle);
                h[f] && (delete h[f], a || void 0 === u.removeAttribute ? u[s] = void 0 : u.removeAttribute(s), c.push(f))
            }
        }
    });
    i.fn.extend({
        domManip: k, detach: function (n) {
            return bu(this, n, !0)
        }, remove: function (n) {
            return bu(this, n)
        }, text: function (n) {
            return y(this, function (n) {
                return void 0 === n ? i.text(this) : this.empty().append((this[0] && this[0].ownerDocument || u).createTextNode(n))
            }, null, n, arguments.length)
        }, append: function () {
            return k(this, arguments, function (n) {
                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || vu(this, n).appendChild(n)
            })
        }, prepend: function () {
            return k(this, arguments, function (n) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = vu(this, n);
                    t.insertBefore(n, t.firstChild)
                }
            })
        }, before: function () {
            return k(this, arguments, function (n) {
                this.parentNode && this.parentNode.insertBefore(n, this)
            })
        }, after: function () {
            return k(this, arguments, function (n) {
                this.parentNode && this.parentNode.insertBefore(n, this.nextSibling)
            })
        }, empty: function () {
            for (var n, t = 0; null != (n = this[t]); t++) {
                for (1 === n.nodeType && i.cleanData(f(n, !1)); n.firstChild;) n.removeChild(n.firstChild);
                n.options && i.nodeName(n, "select") && (n.options.length = 0)
            }
            return this
        }, clone: function (n, t) {
            return n = null != n && n, t = null == t ? n : t, this.map(function () {
                return i.clone(this, n, t)
            })
        }, html: function (n) {
            return y(this, function (n) {
                var t = this[0] || {}, u = 0, e = this.length;
                if (void 0 === n) return 1 === t.nodeType ? t.innerHTML.replace(ge, "") : void 0;
                if ("string" == typeof n && !to.test(n) && (r.htmlSerialize || !au.test(n)) && (r.leadingWhitespace || !hi.test(n)) && !o[(ru.exec(n) || ["", ""])[1].toLowerCase()]) {
                    n = i.htmlPrefilter(n);
                    try {
                        for (; e > u; u++) 1 === (t = this[u] || {}).nodeType && (i.cleanData(f(t, !1)), t.innerHTML = n);
                        t = 0
                    } catch (n) {
                    }
                }
                t && this.empty().append(n)
            }, null, n, arguments.length)
        }, replaceWith: function () {
            var n = [];
            return k(this, arguments, function (t) {
                var r = this.parentNode;
                i.inArray(this, n) < 0 && (i.cleanData(f(this)), r && r.replaceChild(t, this))
            }, n)
        }
    });
    i.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function (n, t) {
        i.fn[n] = function (n) {
            for (var u, r = 0, f = [], e = i(n), o = e.length - 1; o >= r; r++) u = r === o ? this : this.clone(!0), i(e[r])[t](u), ti.apply(f, u.get());
            return this.pushStack(f)
        }
    });
    pi = {HTML: "block", BODY: "block"};
    var du = /^margin/, yt = new RegExp("^(" + ei + ")(?!px)[a-z%]+$", "i"), wi = function (n, t, i, r) {
        var f, u, e = {};
        for (u in t) e[u] = n.style[u], n.style[u] = t[u];
        for (u in f = i.apply(n, r || []), t) n.style[u] = e[u];
        return f
    }, gu = u.documentElement;
    !function () {
        var f, h, c, o, l, a, s = u.createElement("div"), t = u.createElement("div");
        if (t.style) {
            function e() {
                var i, r, e = u.documentElement;
                e.appendChild(s);
                t.style.cssText = "-webkit-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%";
                f = c = a = !1;
                h = l = !0;
                n.getComputedStyle && (r = n.getComputedStyle(t), f = "1%" !== (r || {}).top, a = "2px" === (r || {}).marginLeft, c = "4px" === (r || {width: "4px"}).width, t.style.marginRight = "50%", h = "4px" === (r || {marginRight: "4px"}).marginRight, (i = t.appendChild(u.createElement("div"))).style.cssText = t.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", i.style.marginRight = i.style.width = "0", t.style.width = "1px", l = !parseFloat((n.getComputedStyle(i) || {}).marginRight), t.removeChild(i));
                t.style.display = "none";
                (o = 0 === t.getClientRects().length) && (t.style.display = "", t.innerHTML = "<table><tr><td><\/td><td>t<\/td><\/tr><\/table>", t.childNodes[0].style.borderCollapse = "separate", (i = t.getElementsByTagName("td"))[0].style.cssText = "margin:0;border:0;padding:0;display:none", (o = 0 === i[0].offsetHeight) && (i[0].style.display = "", i[1].style.display = "none", o = 0 === i[0].offsetHeight));
                e.removeChild(s)
            }

            t.style.cssText = "float:left;opacity:.5";
            r.opacity = "0.5" === t.style.opacity;
            r.cssFloat = !!t.style.cssFloat;
            t.style.backgroundClip = "content-box";
            t.cloneNode(!0).style.backgroundClip = "";
            r.clearCloneStyle = "content-box" === t.style.backgroundClip;
            (s = u.createElement("div")).style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute";
            t.innerHTML = "";
            s.appendChild(t);
            r.boxSizing = "" === t.style.boxSizing || "" === t.style.MozBoxSizing || "" === t.style.WebkitBoxSizing;
            i.extend(r, {
                reliableHiddenOffsets: function () {
                    return null == f && e(), o
                }, boxSizingReliable: function () {
                    return null == f && e(), c
                }, pixelMarginRight: function () {
                    return null == f && e(), h
                }, pixelPosition: function () {
                    return null == f && e(), f
                }, reliableMarginRight: function () {
                    return null == f && e(), l
                }, reliableMarginLeft: function () {
                    return null == f && e(), a
                }
            })
        }
    }();
    nf = /^(top|right|bottom|left)$/;
    n.getComputedStyle ? (d = function (t) {
        var i = t.ownerDocument.defaultView;
        return i && i.opener || (i = n), i.getComputedStyle(t)
    }, p = function (n, t, u) {
        var o, s, h, f, e = n.style;
        return "" !== (f = (u = u || d(n)) ? u.getPropertyValue(t) || u[t] : void 0) && void 0 !== f || i.contains(n.ownerDocument, n) || (f = i.style(n, t)), u && !r.pixelMarginRight() && yt.test(f) && du.test(t) && (o = e.width, s = e.minWidth, h = e.maxWidth, e.minWidth = e.maxWidth = e.width = f, f = u.width, e.width = o, e.minWidth = s, e.maxWidth = h), void 0 === f ? f : f + ""
    }) : gu.currentStyle && (d = function (n) {
        return n.currentStyle
    }, p = function (n, t, i) {
        var o, f, e, r, u = n.style;
        return null == (r = (i = i || d(n)) ? i[t] : void 0) && u && u[t] && (r = u[t]), yt.test(r) && !nf.test(t) && (o = u.left, (e = (f = n.runtimeStyle) && f.left) && (f.left = n.currentStyle.left), u.left = "fontSize" === t ? "1em" : r, r = u.pixelLeft + "px", u.left = o, e && (f.left = e)), void 0 === r ? r : r + "" || "auto"
    });
    var ki = /alpha\([^)]*\)/i, eo = /opacity\s*=\s*([^)]*)/i, oo = /^(none|table(?!-c[ea]).+)/,
        so = new RegExp("^(" + ei + ")(.*)$", "i"), ho = {position: "absolute", visibility: "hidden", display: "block"},
        tf = {letterSpacing: "0", fontWeight: "400"}, rf = ["Webkit", "O", "Moz", "ms"],
        uf = u.createElement("div").style;
    i.extend({
        cssHooks: {
            opacity: {
                get: function (n, t) {
                    if (t) {
                        var i = p(n, "opacity");
                        return "" === i ? "1" : i
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {float: r.cssFloat ? "cssFloat" : "styleFloat"},
        style: function (n, t, u, f) {
            if (n && 3 !== n.nodeType && 8 !== n.nodeType && n.style) {
                var e, h, o, s = i.camelCase(t), c = n.style;
                if (t = i.cssProps[s] || (i.cssProps[s] = ff(s) || s), o = i.cssHooks[t] || i.cssHooks[s], void 0 === u) return o && "get" in o && void 0 !== (e = o.get(n, !1, f)) ? e : c[t];
                if ("string" == (h = typeof u) && (e = oi.exec(u)) && e[1] && (u = iu(n, t, e), h = "number"), null != u && u == u && ("number" === h && (u += e && e[3] || (i.cssNumber[s] ? "" : "px")), r.clearCloneStyle || "" !== u || 0 !== t.indexOf("background") || (c[t] = "inherit"), !(o && "set" in o && void 0 === (u = o.set(n, u, f))))) try {
                    c[t] = u
                } catch (n) {
                }
            }
        },
        css: function (n, t, r, u) {
            var o, f, s, e = i.camelCase(t);
            return t = i.cssProps[e] || (i.cssProps[e] = ff(e) || e), (s = i.cssHooks[t] || i.cssHooks[e]) && "get" in s && (f = s.get(n, !0, r)), void 0 === f && (f = p(n, t, u)), "normal" === f && t in tf && (f = tf[t]), "" === r || r ? (o = parseFloat(f), !0 === r || isFinite(o) ? o || 0 : f) : f
        }
    });
    i.each(["height", "width"], function (n, t) {
        i.cssHooks[t] = {
            get: function (n, r, u) {
                if (r) return oo.test(i.css(n, "display")) && 0 === n.offsetWidth ? wi(n, ho, function () {
                    return hf(n, t, u)
                }) : hf(n, t, u)
            }, set: function (n, u, f) {
                var e = f && d(n);
                return of(0, u, f ? sf(n, t, f, r.boxSizing && "border-box" === i.css(n, "boxSizing", !1, e), e) : 0)
            }
        }
    });
    r.opacity || (i.cssHooks.opacity = {
        get: function (n, t) {
            return eo.test((t && n.currentStyle ? n.currentStyle.filter : n.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : t ? "1" : ""
        }, set: function (n, t) {
            var r = n.style, u = n.currentStyle, e = i.isNumeric(t) ? "alpha(opacity=" + 100 * t + ")" : "",
                f = u && u.filter || r.filter || "";
            r.zoom = 1;
            (t >= 1 || "" === t) && "" === i.trim(f.replace(ki, "")) && r.removeAttribute && (r.removeAttribute("filter"), "" === t || u && !u.filter) || (r.filter = ki.test(f) ? f.replace(ki, e) : f + " " + e)
        }
    });
    i.cssHooks.marginRight = bi(r.reliableMarginRight, function (n, t) {
        if (t) return wi(n, {display: "inline-block"}, p, [n, "marginRight"])
    });
    i.cssHooks.marginLeft = bi(r.reliableMarginLeft, function (n, t) {
        if (t) return (parseFloat(p(n, "marginLeft")) || (i.contains(n.ownerDocument, n) ? n.getBoundingClientRect().left - wi(n, {marginLeft: 0}, function () {
            return n.getBoundingClientRect().left
        }) : 0)) + "px"
    });
    i.each({margin: "", padding: "", border: "Width"}, function (n, t) {
        i.cssHooks[n + t] = {
            expand: function (i) {
                for (var r = 0, f = {}, u = "string" == typeof i ? i.split(" ") : [i]; 4 > r; r++) f[n + b[r] + t] = u[r] || u[r - 2] || u[0];
                return f
            }
        };
        du.test(n) || (i.cssHooks[n + t].set = of)
    });
    i.fn.extend({
        css: function (n, t) {
            return y(this, function (n, t, r) {
                var f, e, o = {}, u = 0;
                if (i.isArray(t)) {
                    for (f = d(n), e = t.length; e > u; u++) o[t[u]] = i.css(n, t[u], !1, f);
                    return o
                }
                return void 0 !== r ? i.style(n, t, r) : i.css(n, t)
            }, n, t, arguments.length > 1)
        }, show: function () {
            return ef(this, !0)
        }, hide: function () {
            return ef(this)
        }, toggle: function (n) {
            return "boolean" == typeof n ? n ? this.show() : this.hide() : this.each(function () {
                st(this) ? i(this).show() : i(this).hide()
            })
        }
    });
    i.Tween = e;
    e.prototype = {
        constructor: e, init: function (n, t, r, u, f, e) {
            this.elem = n;
            this.prop = r;
            this.easing = f || i.easing._default;
            this.options = t;
            this.start = this.now = this.cur();
            this.end = u;
            this.unit = e || (i.cssNumber[r] ? "" : "px")
        }, cur: function () {
            var n = e.propHooks[this.prop];
            return n && n.get ? n.get(this) : e.propHooks._default.get(this)
        }, run: function (n) {
            var t, r = e.propHooks[this.prop];
            return this.pos = this.options.duration ? t = i.easing[this.easing](n, this.options.duration * n, 0, 1, this.options.duration) : t = n, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), r && r.set ? r.set(this) : e.propHooks._default.set(this), this
        }
    };
    e.prototype.init.prototype = e.prototype;
    e.propHooks = {
        _default: {
            get: function (n) {
                var t;
                return 1 !== n.elem.nodeType || null != n.elem[n.prop] && null == n.elem.style[n.prop] ? n.elem[n.prop] : (t = i.css(n.elem, n.prop, "")) && "auto" !== t ? t : 0
            }, set: function (n) {
                i.fx.step[n.prop] ? i.fx.step[n.prop](n) : 1 !== n.elem.nodeType || null == n.elem.style[i.cssProps[n.prop]] && !i.cssHooks[n.prop] ? n.elem[n.prop] = n.now : i.style(n.elem, n.prop, n.now + n.unit)
            }
        }
    };
    e.propHooks.scrollTop = e.propHooks.scrollLeft = {
        set: function (n) {
            n.elem.nodeType && n.elem.parentNode && (n.elem[n.prop] = n.now)
        }
    };
    i.easing = {
        linear: function (n) {
            return n
        }, swing: function (n) {
            return .5 - Math.cos(n * Math.PI) / 2
        }, _default: "swing"
    };
    i.fx = e.prototype.init;
    i.fx.step = {};
    cf = /^(?:toggle|show|hide)$/;
    lf = /queueHooks$/;
    i.Animation = i.extend(h, {
        tweeners: {
            "*": [function (n, t) {
                var i = this.createTween(n, t);
                return iu(i.elem, n, oi.exec(t), i), i
            }]
        }, tweener: function (n, t) {
            i.isFunction(n) ? (t = n, n = ["*"]) : n = n.match(s);
            for (var r, u = 0, f = n.length; f > u; u++) r = n[u], h.tweeners[r] = h.tweeners[r] || [], h.tweeners[r].unshift(t)
        }, prefilters: [function (n, t, u) {
            var f, a, p, v, s, w, c, l = this, y = {}, o = n.style, h = n.nodeType && st(n), e = i._data(n, "fxshow");
            for (f in u.queue || (null == (s = i._queueHooks(n, "fx")).unqueued && (s.unqueued = 0, w = s.empty.fire, s.empty.fire = function () {
                s.unqueued || w()
            }), s.unqueued++, l.always(function () {
                l.always(function () {
                    s.unqueued--;
                    i.queue(n, "fx").length || s.empty.fire()
                })
            })), 1 === n.nodeType && ("height" in t || "width" in t) && (u.overflow = [o.overflow, o.overflowX, o.overflowY], "inline" === ("none" === (c = i.css(n, "display")) ? i._data(n, "olddisplay") || vt(n.nodeName) : c) && "none" === i.css(n, "float") && (r.inlineBlockNeedsLayout && "inline" !== vt(n.nodeName) ? o.zoom = 1 : o.display = "inline-block")), u.overflow && (o.overflow = "hidden", r.shrinkWrapBlocks() || l.always(function () {
                o.overflow = u.overflow[0];
                o.overflowX = u.overflow[1];
                o.overflowY = u.overflow[2]
            })), t) if (a = t[f], cf.exec(a)) {
                if (delete t[f], p = p || "toggle" === a, a === (h ? "hide" : "show")) {
                    if ("show" !== a || !e || void 0 === e[f]) continue;
                    h = !0
                }
                y[f] = e && e[f] || i.style(n, f)
            } else c = void 0;
            if (i.isEmptyObject(y)) "inline" === ("none" === c ? vt(n.nodeName) : c) && (o.display = c); else for (f in e ? "hidden" in e && (h = e.hidden) : e = i._data(n, "fxshow", {}), p && (e.hidden = !h), h ? i(n).show() : l.done(function () {
                i(n).hide()
            }), l.done(function () {
                for (var t in i._removeData(n, "fxshow"), y) i.style(n, t, y[t])
            }), y) v = vf(h ? e[f] : 0, f, l), f in e || (e[f] = v.start, h && (v.end = v.start, v.start = "width" === f || "height" === f ? 1 : 0))
        }], prefilter: function (n, t) {
            t ? h.prefilters.unshift(n) : h.prefilters.push(n)
        }
    });
    i.speed = function (n, t, r) {
        var u = n && "object" == typeof n ? i.extend({}, n) : {
            complete: r || !r && t || i.isFunction(n) && n,
            duration: n,
            easing: r && t || t && !i.isFunction(t) && t
        };
        return u.duration = i.fx.off ? 0 : "number" == typeof u.duration ? u.duration : u.duration in i.fx.speeds ? i.fx.speeds[u.duration] : i.fx.speeds._default, null != u.queue && !0 !== u.queue || (u.queue = "fx"), u.old = u.complete, u.complete = function () {
            i.isFunction(u.old) && u.old.call(this);
            u.queue && i.dequeue(this, u.queue)
        }, u
    };
    i.fn.extend({
        fadeTo: function (n, t, i, r) {
            return this.filter(st).css("opacity", 0).show().end().animate({opacity: t}, n, i, r)
        }, animate: function (n, t, r, u) {
            var o = i.isEmptyObject(n), e = i.speed(t, r, u), f = function () {
                var t = h(this, i.extend({}, n), e);
                (o || i._data(this, "finish")) && t.stop(!0)
            };
            return f.finish = f, o || !1 === e.queue ? this.each(f) : this.queue(e.queue, f)
        }, stop: function (n, t, r) {
            var u = function (n) {
                var t = n.stop;
                delete n.stop;
                t(r)
            };
            return "string" != typeof n && (r = t, t = n, n = void 0), t && !1 !== n && this.queue(n || "fx", []), this.each(function () {
                var o = !0, t = null != n && n + "queueHooks", e = i.timers, f = i._data(this);
                if (t) f[t] && f[t].stop && u(f[t]); else for (t in f) f[t] && f[t].stop && lf.test(t) && u(f[t]);
                for (t = e.length; t--;) e[t].elem !== this || null != n && e[t].queue !== n || (e[t].anim.stop(r), o = !1, e.splice(t, 1));
                !o && r || i.dequeue(this, n)
            })
        }, finish: function (n) {
            return !1 !== n && (n = n || "fx"), this.each(function () {
                var t, f = i._data(this), r = f[n + "queue"], e = f[n + "queueHooks"], u = i.timers,
                    o = r ? r.length : 0;
                for (f.finish = !0, i.queue(this, n, []), e && e.stop && e.stop.call(this, !0), t = u.length; t--;) u[t].elem === this && u[t].queue === n && (u[t].anim.stop(!0), u.splice(t, 1));
                for (t = 0; o > t; t++) r[t] && r[t].finish && r[t].finish.call(this);
                delete f.finish
            })
        }
    });
    i.each(["toggle", "show", "hide"], function (n, t) {
        var r = i.fn[t];
        i.fn[t] = function (n, i, u) {
            return null == n || "boolean" == typeof n ? r.apply(this, arguments) : this.animate(wt(t, !0), n, i, u)
        }
    });
    i.each({
        slideDown: wt("show"),
        slideUp: wt("hide"),
        slideToggle: wt("toggle"),
        fadeIn: {opacity: "show"},
        fadeOut: {opacity: "hide"},
        fadeToggle: {opacity: "toggle"}
    }, function (n, t) {
        i.fn[n] = function (n, i, r) {
            return this.animate(t, n, i, r)
        }
    });
    i.timers = [];
    i.fx.tick = function () {
        var r, n = i.timers, t = 0;
        for (ut = i.now(); t < n.length; t++) (r = n[t])() || n[t] !== r || n.splice(t--, 1);
        n.length || i.fx.stop();
        ut = void 0
    };
    i.fx.timer = function (n) {
        i.timers.push(n);
        n() ? i.fx.start() : i.timers.pop()
    };
    i.fx.interval = 13;
    i.fx.start = function () {
        pt || (pt = n.setInterval(i.fx.tick, i.fx.interval))
    };
    i.fx.stop = function () {
        n.clearInterval(pt);
        pt = null
    };
    i.fx.speeds = {slow: 600, fast: 200, _default: 400};
    i.fn.delay = function (t, r) {
        return t = i.fx && i.fx.speeds[t] || t, r = r || "fx", this.queue(r, function (i, r) {
            var u = n.setTimeout(i, t);
            r.stop = function () {
                n.clearTimeout(u)
            }
        })
    }, function () {
        var i, n = u.createElement("input"), t = u.createElement("div"), f = u.createElement("select"),
            e = f.appendChild(u.createElement("option"));
        (t = u.createElement("div")).setAttribute("className", "t");
        t.innerHTML = "  <link/><table><\/table><a href='/a'>a<\/a><input type='checkbox'/>";
        i = t.getElementsByTagName("a")[0];
        n.setAttribute("type", "checkbox");
        t.appendChild(n);
        (i = t.getElementsByTagName("a")[0]).style.cssText = "top:1px";
        r.getSetAttribute = "t" !== t.className;
        r.style = /top/.test(i.getAttribute("style"));
        r.hrefNormalized = "/a" === i.getAttribute("href");
        r.checkOn = !!n.value;
        r.optSelected = e.selected;
        r.enctype = !!u.createElement("form").enctype;
        f.disabled = !0;
        r.optDisabled = !e.disabled;
        (n = u.createElement("input")).setAttribute("value", "");
        r.input = "" === n.getAttribute("value");
        n.value = "t";
        n.setAttribute("type", "radio");
        r.radioValue = "t" === n.value
    }();
    yf = /\r/g;
    pf = /[\x20\t\r\n\f]+/g;
    i.fn.extend({
        val: function (n) {
            var t, r, f, u = this[0];
            return arguments.length ? (f = i.isFunction(n), this.each(function (r) {
                var u;
                1 === this.nodeType && (null == (u = f ? n.call(this, r, i(this).val()) : n) ? u = "" : "number" == typeof u ? u += "" : i.isArray(u) && (u = i.map(u, function (n) {
                    return null == n ? "" : n + ""
                })), (t = i.valHooks[this.type] || i.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, u, "value") || (this.value = u))
            })) : u ? (t = i.valHooks[u.type] || i.valHooks[u.nodeName.toLowerCase()]) && "get" in t && void 0 !== (r = t.get(u, "value")) ? r : "string" == typeof (r = u.value) ? r.replace(yf, "") : null == r ? "" : r : void 0
        }
    });
    i.extend({
        valHooks: {
            option: {
                get: function (n) {
                    var t = i.find.attr(n, "value");
                    return null != t ? t : i.trim(i.text(n)).replace(pf, " ")
                }
            }, select: {
                get: function (n) {
                    for (var o, t, s = n.options, u = n.selectedIndex, f = "select-one" === n.type || 0 > u, h = f ? null : [], c = f ? u + 1 : s.length, e = 0 > u ? c : f ? u : 0; c > e; e++) if (((t = s[e]).selected || e === u) && (r.optDisabled ? !t.disabled : null === t.getAttribute("disabled")) && (!t.parentNode.disabled || !i.nodeName(t.parentNode, "optgroup"))) {
                        if (o = i(t).val(), f) return o;
                        h.push(o)
                    }
                    return h
                }, set: function (n, t) {
                    for (var f, r, u = n.options, o = i.makeArray(t), e = u.length; e--;) if (r = u[e], i.inArray(i.valHooks.option.get(r), o) > -1) try {
                        r.selected = f = !0
                    } catch (n) {
                        r.scrollHeight
                    } else r.selected = !1;
                    return f || (n.selectedIndex = -1), u
                }
            }
        }
    });
    i.each(["radio", "checkbox"], function () {
        i.valHooks[this] = {
            set: function (n, t) {
                if (i.isArray(t)) return n.checked = i.inArray(i(n).val(), t) > -1
            }
        };
        r.checkOn || (i.valHooks[this].get = function (n) {
            return null === n.getAttribute("value") ? "on" : n.value
        })
    });
    var ft, wf, l = i.expr.attrHandle, di = /^(?:checked|selected)$/i, g = r.getSetAttribute, bt = r.input;
    i.fn.extend({
        attr: function (n, t) {
            return y(this, i.attr, n, t, arguments.length > 1)
        }, removeAttr: function (n) {
            return this.each(function () {
                i.removeAttr(this, n)
            })
        }
    });
    i.extend({
        attr: function (n, t, r) {
            var f, u, e = n.nodeType;
            if (3 !== e && 8 !== e && 2 !== e) return void 0 === n.getAttribute ? i.prop(n, t, r) : (1 === e && i.isXMLDoc(n) || (t = t.toLowerCase(), u = i.attrHooks[t] || (i.expr.match.bool.test(t) ? wf : ft)), void 0 !== r ? null === r ? void i.removeAttr(n, t) : u && "set" in u && void 0 !== (f = u.set(n, r, t)) ? f : (n.setAttribute(t, r + ""), r) : u && "get" in u && null !== (f = u.get(n, t)) ? f : null == (f = i.find.attr(n, t)) ? void 0 : f)
        }, attrHooks: {
            type: {
                set: function (n, t) {
                    if (!r.radioValue && "radio" === t && i.nodeName(n, "input")) {
                        var u = n.value;
                        return n.setAttribute("type", t), u && (n.value = u), t
                    }
                }
            }
        }, removeAttr: function (n, t) {
            var r, u, e = 0, f = t && t.match(s);
            if (f && 1 === n.nodeType) for (; r = f[e++];) u = i.propFix[r] || r, i.expr.match.bool.test(r) ? bt && g || !di.test(r) ? n[u] = !1 : n[i.camelCase("default-" + r)] = n[u] = !1 : i.attr(n, r, ""), n.removeAttribute(g ? r : u)
        }
    });
    wf = {
        set: function (n, t, r) {
            return !1 === t ? i.removeAttr(n, r) : bt && g || !di.test(r) ? n.setAttribute(!g && i.propFix[r] || r, r) : n[i.camelCase("default-" + r)] = n[r] = !0, r
        }
    };
    i.each(i.expr.match.bool.source.match(/\w+/g), function (n, t) {
        var r = l[t] || i.find.attr;
        l[t] = bt && g || !di.test(t) ? function (n, t, i) {
            var u, f;
            return i || (f = l[t], l[t] = u, u = null != r(n, t, i) ? t.toLowerCase() : null, l[t] = f), u
        } : function (n, t, r) {
            if (!r) return n[i.camelCase("default-" + t)] ? t.toLowerCase() : null
        }
    });
    bt && g || (i.attrHooks.value = {
        set: function (n, t, r) {
            return i.nodeName(n, "input") ? void (n.defaultValue = t) : ft && ft.set(n, t, r)
        }
    });
    g || (ft = {
        set: function (n, t, i) {
            var r = n.getAttributeNode(i);
            return r || n.setAttributeNode(r = n.ownerDocument.createAttribute(i)), r.value = t += "", "value" === i || t === n.getAttribute(i) ? t : void 0
        }
    }, l.id = l.name = l.coords = function (n, t, i) {
        var r;
        if (!i) return (r = n.getAttributeNode(t)) && "" !== r.value ? r.value : null
    }, i.valHooks.button = {
        get: function (n, t) {
            var i = n.getAttributeNode(t);
            if (i && i.specified) return i.value
        }, set: ft.set
    }, i.attrHooks.contenteditable = {
        set: function (n, t, i) {
            ft.set(n, "" !== t && t, i)
        }
    }, i.each(["width", "height"], function (n, t) {
        i.attrHooks[t] = {
            set: function (n, i) {
                if ("" === i) return (n.setAttribute(t, "auto"), i)
            }
        }
    }));
    r.style || (i.attrHooks.style = {
        get: function (n) {
            return n.style.cssText || void 0
        }, set: function (n, t) {
            return n.style.cssText = t + ""
        }
    });
    bf = /^(?:input|select|textarea|button|object)$/i;
    kf = /^(?:a|area)$/i;
    i.fn.extend({
        prop: function (n, t) {
            return y(this, i.prop, n, t, arguments.length > 1)
        }, removeProp: function (n) {
            return n = i.propFix[n] || n, this.each(function () {
                try {
                    this[n] = void 0;
                    delete this[n]
                } catch (n) {
                }
            })
        }
    });
    i.extend({
        prop: function (n, t, r) {
            var f, u, e = n.nodeType;
            if (3 !== e && 8 !== e && 2 !== e) return 1 === e && i.isXMLDoc(n) || (t = i.propFix[t] || t, u = i.propHooks[t]), void 0 !== r ? u && "set" in u && void 0 !== (f = u.set(n, r, t)) ? f : n[t] = r : u && "get" in u && null !== (f = u.get(n, t)) ? f : n[t]
        }, propHooks: {
            tabIndex: {
                get: function (n) {
                    var t = i.find.attr(n, "tabindex");
                    return t ? parseInt(t, 10) : bf.test(n.nodeName) || kf.test(n.nodeName) && n.href ? 0 : -1
                }
            }
        }, propFix: {"for": "htmlFor", "class": "className"}
    });
    r.hrefNormalized || i.each(["href", "src"], function (n, t) {
        i.propHooks[t] = {
            get: function (n) {
                return n.getAttribute(t, 4)
            }
        }
    });
    r.optSelected || (i.propHooks.selected = {
        get: function (n) {
            var t = n.parentNode;
            return t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex), null
        }, set: function (n) {
            var t = n.parentNode;
            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
        }
    });
    i.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
        i.propFix[this.toLowerCase()] = this
    });
    r.enctype || (i.propFix.enctype = "encoding");
    kt = /[\t\r\n\f]/g;
    i.fn.extend({
        addClass: function (n) {
            var e, t, r, u, f, o, h, c = 0;
            if (i.isFunction(n)) return this.each(function (t) {
                i(this).addClass(n.call(this, t, nt(this)))
            });
            if ("string" == typeof n && n) for (e = n.match(s) || []; t = this[c++];) if (u = nt(t), r = 1 === t.nodeType && (" " + u + " ").replace(kt, " ")) {
                for (o = 0; f = e[o++];) r.indexOf(" " + f + " ") < 0 && (r += f + " ");
                u !== (h = i.trim(r)) && i.attr(t, "class", h)
            }
            return this
        }, removeClass: function (n) {
            var e, r, t, u, f, o, h, c = 0;
            if (i.isFunction(n)) return this.each(function (t) {
                i(this).removeClass(n.call(this, t, nt(this)))
            });
            if (!arguments.length) return this.attr("class", "");
            if ("string" == typeof n && n) for (e = n.match(s) || []; r = this[c++];) if (u = nt(r), t = 1 === r.nodeType && (" " + u + " ").replace(kt, " ")) {
                for (o = 0; f = e[o++];) for (; t.indexOf(" " + f + " ") > -1;) t = t.replace(" " + f + " ", " ");
                u !== (h = i.trim(t)) && i.attr(r, "class", h)
            }
            return this
        }, toggleClass: function (n, t) {
            var r = typeof n;
            return "boolean" == typeof t && "string" === r ? t ? this.addClass(n) : this.removeClass(n) : i.isFunction(n) ? this.each(function (r) {
                i(this).toggleClass(n.call(this, r, nt(this), t), t)
            }) : this.each(function () {
                var t, f, u, e;
                if ("string" === r) for (f = 0, u = i(this), e = n.match(s) || []; t = e[f++];) u.hasClass(t) ? u.removeClass(t) : u.addClass(t); else void 0 !== n && "boolean" !== r || ((t = nt(this)) && i._data(this, "__className__", t), i.attr(this, "class", t || !1 === n ? "" : i._data(this, "__className__") || ""))
            })
        }, hasClass: function (n) {
            for (var t, r = 0, i = " " + n + " "; t = this[r++];) if (1 === t.nodeType && (" " + nt(t) + " ").replace(kt, " ").indexOf(i) > -1) return !0;
            return !1
        }
    });
    i.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function (n, t) {
        i.fn[t] = function (n, i) {
            return arguments.length > 0 ? this.on(t, null, n, i) : this.trigger(t)
        }
    });
    i.fn.extend({
        hover: function (n, t) {
            return this.mouseenter(n).mouseleave(t || n)
        }
    });
    var co = n.location, gi = i.now(), nr = /\?/,
        lo = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
    i.parseJSON = function (t) {
        if (n.JSON && n.JSON.parse) return n.JSON.parse(t + "");
        var f, r = null, u = i.trim(t + "");
        return u && !i.trim(u.replace(lo, function (n, t, i, u) {
            return f && t && (r = 0), 0 === r ? n : (f = i || t, r += !u - !i, "")
        })) ? Function("return " + u)() : i.error("Invalid JSON: " + t)
    };
    i.parseXML = function (t) {
        var r;
        if (!t || "string" != typeof t) return null;
        try {
            n.DOMParser ? r = (new n.DOMParser).parseFromString(t, "text/xml") : ((r = new n.ActiveXObject("Microsoft.XMLDOM")).async = "false", r.loadXML(t))
        } catch (n) {
            r = void 0
        }
        return r && r.documentElement && !r.getElementsByTagName("parsererror").length || i.error("Invalid XML: " + t), r
    };
    var ao = /#.*$/, df = /([?&])_=[^&]*/, vo = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm, yo = /^(?:GET|HEAD)$/, po = /^\/\//,
        gf = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/, ne = {}, tr = {}, te = "*/".concat("*"),
        ir = co.href, et = gf.exec(ir.toLowerCase()) || [];
    i.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: ir,
            type: "GET",
            isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(et[1]),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": te,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/},
            responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"},
            converters: {"* text": String, "text html": !0, "text json": i.parseJSON, "text xml": i.parseXML},
            flatOptions: {url: !0, context: !0}
        },
        ajaxSetup: function (n, t) {
            return t ? rr(rr(n, i.ajaxSettings), t) : rr(i.ajaxSettings, n)
        },
        ajaxPrefilter: ie(ne),
        ajaxTransport: ie(tr),
        ajax: function (t, r) {
            function w(t, r, s, c) {
                var y, rt, tt, w, it, l = r;
                2 !== o && (o = 2, k && n.clearTimeout(k), a = void 0, b = c || "", f.readyState = t > 0 ? 4 : 0, y = t >= 200 && 300 > t || 304 === t, s && (w = function (n, t, i) {
                    for (var o, e, u, f, s = n.contents, r = n.dataTypes; "*" === r[0];) r.shift(), void 0 === e && (e = n.mimeType || t.getResponseHeader("Content-Type"));
                    if (e) for (f in s) if (s[f] && s[f].test(e)) {
                        r.unshift(f);
                        break
                    }
                    if (r[0] in i) u = r[0]; else {
                        for (f in i) {
                            if (!r[0] || n.converters[f + " " + r[0]]) {
                                u = f;
                                break
                            }
                            o || (o = f)
                        }
                        u = u || o
                    }
                    if (u) return (u !== r[0] && r.unshift(u), i[u])
                }(u, f, s)), w = function (n, t, i, r) {
                    var h, u, f, s, e, o = {}, c = n.dataTypes.slice();
                    if (c[1]) for (f in n.converters) o[f.toLowerCase()] = n.converters[f];
                    for (u = c.shift(); u;) if (n.responseFields[u] && (i[n.responseFields[u]] = t), !e && r && n.dataFilter && (t = n.dataFilter(t, n.dataType)), e = u, u = c.shift()) if ("*" === u) u = e; else if ("*" !== e && e !== u) {
                        if (!(f = o[e + " " + u] || o["* " + u])) for (h in o) if ((s = h.split(" "))[1] === u && (f = o[e + " " + s[0]] || o["* " + s[0]])) {
                            !0 === f ? f = o[h] : !0 !== o[h] && (u = s[0], c.unshift(s[1]));
                            break
                        }
                        if (!0 !== f) if (f && n.throws) t = f(t); else try {
                            t = f(t)
                        } catch (n) {
                            return {state: "parsererror", error: f ? n : "No conversion from " + e + " to " + u}
                        }
                    }
                    return {state: "success", data: t}
                }(u, w, f, y), y ? (u.ifModified && ((it = f.getResponseHeader("Last-Modified")) && (i.lastModified[e] = it), (it = f.getResponseHeader("etag")) && (i.etag[e] = it)), 204 === t || "HEAD" === u.type ? l = "nocontent" : 304 === t ? l = "notmodified" : (l = w.state, rt = w.data, y = !(tt = w.error))) : (tt = l, !t && l || (l = "error", 0 > t && (t = 0))), f.status = t, f.statusText = (r || l) + "", y ? g.resolveWith(h, [rt, l, f]) : g.rejectWith(h, [f, l, tt]), f.statusCode(p), p = void 0, v && d.trigger(y ? "ajaxSuccess" : "ajaxError", [f, u, y ? rt : tt]), nt.fireWith(h, [f, l]), v && (d.trigger("ajaxComplete", [f, u]), --i.active || i.event.trigger("ajaxStop")))
            }

            "object" == typeof t && (r = t, t = void 0);
            r = r || {};
            var c, l, e, b, k, v, a, y, u = i.ajaxSetup({}, r), h = u.context || u,
                d = u.context && (h.nodeType || h.jquery) ? i(h) : i.event, g = i.Deferred(),
                nt = i.Callbacks("once memory"), p = u.statusCode || {}, tt = {}, it = {}, o = 0, rt = "canceled", f = {
                    readyState: 0, getResponseHeader: function (n) {
                        var t;
                        if (2 === o) {
                            if (!y) for (y = {}; t = vo.exec(b);) y[t[1].toLowerCase()] = t[2];
                            t = y[n.toLowerCase()]
                        }
                        return null == t ? null : t
                    }, getAllResponseHeaders: function () {
                        return 2 === o ? b : null
                    }, setRequestHeader: function (n, t) {
                        var i = n.toLowerCase();
                        return o || (n = it[i] = it[i] || n, tt[n] = t), this
                    }, overrideMimeType: function (n) {
                        return o || (u.mimeType = n), this
                    }, statusCode: function (n) {
                        var t;
                        if (n) if (2 > o) for (t in n) p[t] = [p[t], n[t]]; else f.always(n[f.status]);
                        return this
                    }, abort: function (n) {
                        var t = n || rt;
                        return a && a.abort(t), w(0, t), this
                    }
                };
            if (g.promise(f).complete = nt.add, f.success = f.done, f.error = f.fail, u.url = ((t || u.url || ir) + "").replace(ao, "").replace(po, et[1] + "//"), u.type = r.method || r.type || u.method || u.type, u.dataTypes = i.trim(u.dataType || "*").toLowerCase().match(s) || [""], null == u.crossDomain && (c = gf.exec(u.url.toLowerCase()), u.crossDomain = !(!c || c[1] === et[1] && c[2] === et[2] && (c[3] || ("http:" === c[1] ? "80" : "443")) === (et[3] || ("http:" === et[1] ? "80" : "443")))), u.data && u.processData && "string" != typeof u.data && (u.data = i.param(u.data, u.traditional)), re(ne, u, r, f), 2 === o) return f;
            for (l in (v = i.event && u.global) && 0 == i.active++ && i.event.trigger("ajaxStart"), u.type = u.type.toUpperCase(), u.hasContent = !yo.test(u.type), e = u.url, u.hasContent || (u.data && (e = u.url += (nr.test(e) ? "&" : "?") + u.data, delete u.data), !1 === u.cache && (u.url = df.test(e) ? e.replace(df, "$1_=" + gi++) : e + (nr.test(e) ? "&" : "?") + "_=" + gi++)), u.ifModified && (i.lastModified[e] && f.setRequestHeader("If-Modified-Since", i.lastModified[e]), i.etag[e] && f.setRequestHeader("If-None-Match", i.etag[e])), (u.data && u.hasContent && !1 !== u.contentType || r.contentType) && f.setRequestHeader("Content-Type", u.contentType), f.setRequestHeader("Accept", u.dataTypes[0] && u.accepts[u.dataTypes[0]] ? u.accepts[u.dataTypes[0]] + ("*" !== u.dataTypes[0] ? ", " + te + "; q=0.01" : "") : u.accepts["*"]), u.headers) f.setRequestHeader(l, u.headers[l]);
            if (u.beforeSend && (!1 === u.beforeSend.call(h, f, u) || 2 === o)) return f.abort();
            for (l in rt = "abort", {success: 1, error: 1, complete: 1}) f[l](u[l]);
            if (a = re(tr, u, r, f)) {
                if (f.readyState = 1, v && d.trigger("ajaxSend", [f, u]), 2 === o) return f;
                u.async && u.timeout > 0 && (k = n.setTimeout(function () {
                    f.abort("timeout")
                }, u.timeout));
                try {
                    o = 1;
                    a.send(tt, w)
                } catch (n) {
                    if (!(2 > o)) throw n;
                    w(-1, n)
                }
            } else w(-1, "No Transport");
            return f
        },
        getJSON: function (n, t, r) {
            return i.get(n, t, r, "json")
        },
        getScript: function (n, t) {
            return i.get(n, void 0, t, "script")
        }
    });
    i.each(["get", "post"], function (n, t) {
        i[t] = function (n, r, u, f) {
            return i.isFunction(r) && (f = f || u, u = r, r = void 0), i.ajax(i.extend({
                url: n,
                type: t,
                dataType: f,
                data: r,
                success: u
            }, i.isPlainObject(n) && n))
        }
    });
    i._evalUrl = function (n) {
        return i.ajax({url: n, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, throws: !0})
    };
    i.fn.extend({
        wrapAll: function (n) {
            if (i.isFunction(n)) return this.each(function (t) {
                i(this).wrapAll(n.call(this, t))
            });
            if (this[0]) {
                var t = i(n, this[0].ownerDocument).eq(0).clone(!0);
                this[0].parentNode && t.insertBefore(this[0]);
                t.map(function () {
                    for (var n = this; n.firstChild && 1 === n.firstChild.nodeType;) n = n.firstChild;
                    return n
                }).append(this)
            }
            return this
        }, wrapInner: function (n) {
            return i.isFunction(n) ? this.each(function (t) {
                i(this).wrapInner(n.call(this, t))
            }) : this.each(function () {
                var t = i(this), r = t.contents();
                r.length ? r.wrapAll(n) : t.append(n)
            })
        }, wrap: function (n) {
            var t = i.isFunction(n);
            return this.each(function (r) {
                i(this).wrapAll(t ? n.call(this, r) : n)
            })
        }, unwrap: function () {
            return this.parent().each(function () {
                i.nodeName(this, "body") || i(this).replaceWith(this.childNodes)
            }).end()
        }
    });
    i.expr.filters.hidden = function (n) {
        return r.reliableHiddenOffsets() ? n.offsetWidth <= 0 && n.offsetHeight <= 0 && !n.getClientRects().length : function (n) {
            if (!i.contains(n.ownerDocument || u, n)) return !0;
            for (; n && 1 === n.nodeType;) {
                if ("none" === wo(n) || "hidden" === n.type) return !0;
                n = n.parentNode
            }
            return !1
        }(n)
    };
    i.expr.filters.visible = function (n) {
        return !i.expr.filters.hidden(n)
    };
    var bo = /%20/g, ko = /\[\]$/, ue = /\r?\n/g, go = /^(?:submit|button|image|reset|file)$/i,
        ns = /^(?:input|select|textarea|keygen)/i;
    i.param = function (n, t) {
        var r, u = [], f = function (n, t) {
            t = i.isFunction(t) ? t() : null == t ? "" : t;
            u[u.length] = encodeURIComponent(n) + "=" + encodeURIComponent(t)
        };
        if (void 0 === t && (t = i.ajaxSettings && i.ajaxSettings.traditional), i.isArray(n) || n.jquery && !i.isPlainObject(n)) i.each(n, function () {
            f(this.name, this.value)
        }); else for (r in n) ur(r, n[r], t, f);
        return u.join("&").replace(bo, "+")
    };
    i.fn.extend({
        serialize: function () {
            return i.param(this.serializeArray())
        }, serializeArray: function () {
            return this.map(function () {
                var n = i.prop(this, "elements");
                return n ? i.makeArray(n) : this
            }).filter(function () {
                var n = this.type;
                return this.name && !i(this).is(":disabled") && ns.test(this.nodeName) && !go.test(n) && (this.checked || !si.test(n))
            }).map(function (n, t) {
                var r = i(this).val();
                return null == r ? null : i.isArray(r) ? i.map(r, function (n) {
                    return {name: t.name, value: n.replace(ue, "\r\n")}
                }) : {name: t.name, value: r.replace(ue, "\r\n")}
            }).get()
        }
    });
    i.ajaxSettings.xhr = void 0 !== n.ActiveXObject ? function () {
        return this.isLocal ? fe() : u.documentMode > 8 ? fr() : /^(get|post|head|put|delete|options)$/i.test(this.type) && fr() || fe()
    } : fr;
    var ts = 0, dt = {}, gt = i.ajaxSettings.xhr();
    return n.attachEvent && n.attachEvent("onunload", function () {
        for (var n in dt) dt[n](void 0, !0)
    }), r.cors = !!gt && "withCredentials" in gt, (gt = r.ajax = !!gt) && i.ajaxTransport(function (t) {
        var u;
        if (!t.crossDomain || r.cors) return {
            send: function (r, f) {
                var o, e = t.xhr(), s = ++ts;
                if (e.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields) for (o in t.xhrFields) e[o] = t.xhrFields[o];
                for (o in t.mimeType && e.overrideMimeType && e.overrideMimeType(t.mimeType), t.crossDomain || r["X-Requested-With"] || (r["X-Requested-With"] = "XMLHttpRequest"), r) void 0 !== r[o] && e.setRequestHeader(o, r[o] + "");
                e.send(t.hasContent && t.data || null);
                u = function (n, r) {
                    var o, c, h;
                    if (u && (r || 4 === e.readyState)) if (delete dt[s], u = void 0, e.onreadystatechange = i.noop, r) 4 !== e.readyState && e.abort(); else {
                        h = {};
                        o = e.status;
                        "string" == typeof e.responseText && (h.text = e.responseText);
                        try {
                            c = e.statusText
                        } catch (n) {
                            c = ""
                        }
                        o || !t.isLocal || t.crossDomain ? 1223 === o && (o = 204) : o = h.text ? 200 : 404
                    }
                    h && f(o, c, h, e.getAllResponseHeaders())
                };
                t.async ? 4 === e.readyState ? n.setTimeout(u) : e.onreadystatechange = dt[s] = u : u()
            }, abort: function () {
                u && u(void 0, !0)
            }
        }
    }), i.ajaxSetup({
        accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},
        contents: {script: /\b(?:java|ecma)script\b/},
        converters: {
            "text script": function (n) {
                return i.globalEval(n), n
            }
        }
    }), i.ajaxPrefilter("script", function (n) {
        void 0 === n.cache && (n.cache = !1);
        n.crossDomain && (n.type = "GET", n.global = !1)
    }), i.ajaxTransport("script", function (n) {
        if (n.crossDomain) {
            var t, r = u.head || i("head")[0] || u.documentElement;
            return {
                send: function (i, f) {
                    (t = u.createElement("script")).async = !0;
                    n.scriptCharset && (t.charset = n.scriptCharset);
                    t.src = n.url;
                    t.onload = t.onreadystatechange = function (n, i) {
                        (i || !t.readyState || /loaded|complete/.test(t.readyState)) && (t.onload = t.onreadystatechange = null, t.parentNode && t.parentNode.removeChild(t), t = null, i || f(200, "success"))
                    };
                    r.insertBefore(t, r.firstChild)
                }, abort: function () {
                    t && t.onload(void 0, !0)
                }
            }
        }
    }), er = [], ni = /(=)\?(?=&|$)|\?\?/, i.ajaxSetup({
        jsonp: "callback", jsonpCallback: function () {
            var n = er.pop() || i.expando + "_" + gi++;
            return this[n] = !0, n
        }
    }), i.ajaxPrefilter("json jsonp", function (t, r, u) {
        var f, e, o,
            s = !1 !== t.jsonp && (ni.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && ni.test(t.data) && "data");
        if (s || "jsonp" === t.dataTypes[0]) return (f = t.jsonpCallback = i.isFunction(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(ni, "$1" + f) : !1 !== t.jsonp && (t.url += (nr.test(t.url) ? "&" : "?") + t.jsonp + "=" + f), t.converters["script json"] = function () {
            return o || i.error(f + " was not called"), o[0]
        }, t.dataTypes[0] = "json", e = n[f], n[f] = function () {
            o = arguments
        }, u.always(function () {
            void 0 === e ? i(n).removeProp(f) : n[f] = e;
            t[f] && (t.jsonpCallback = r.jsonpCallback, er.push(f));
            o && i.isFunction(e) && e(o[0]);
            o = e = void 0
        }), "script")
    }), i.parseHTML = function (n, t, r) {
        if (!n || "string" != typeof n) return null;
        "boolean" == typeof t && (r = t, t = !1);
        t = t || u;
        var f = vr.exec(n), e = !r && [];
        return f ? [t.createElement(f[1])] : (f = su([n], t, e), e && e.length && i(e).remove(), i.merge([], f.childNodes))
    }, or = i.fn.load, i.fn.load = function (n, t, r) {
        if ("string" != typeof n && or) return or.apply(this, arguments);
        var u, o, s, f = this, e = n.indexOf(" ");
        return e > -1 && (u = i.trim(n.slice(e, n.length)), n = n.slice(0, e)), i.isFunction(t) ? (r = t, t = void 0) : t && "object" == typeof t && (o = "POST"), f.length > 0 && i.ajax({
            url: n,
            type: o || "GET",
            dataType: "html",
            data: t
        }).done(function (n) {
            s = arguments;
            f.html(u ? i("<div>").append(i.parseHTML(n)).find(u) : n)
        }).always(r && function (n, t) {
            f.each(function () {
                r.apply(this, s || [n.responseText, t, n])
            })
        }), this
    }, i.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (n, t) {
        i.fn[t] = function (n) {
            return this.on(t, n)
        }
    }), i.expr.filters.animated = function (n) {
        return i.grep(i.timers, function (t) {
            return n === t.elem
        }).length
    }, i.offset = {
        setOffset: function (n, t, r) {
            var a, e, o, s, u, h, c = i.css(n, "position"), l = i(n), f = {};
            "static" === c && (n.style.position = "relative");
            u = l.offset();
            o = i.css(n, "top");
            h = i.css(n, "left");
            ("absolute" === c || "fixed" === c) && i.inArray("auto", [o, h]) > -1 ? (s = (a = l.position()).top, e = a.left) : (s = parseFloat(o) || 0, e = parseFloat(h) || 0);
            i.isFunction(t) && (t = t.call(n, r, i.extend({}, u)));
            null != t.top && (f.top = t.top - u.top + s);
            null != t.left && (f.left = t.left - u.left + e);
            "using" in t ? t.using.call(n, f) : l.css(f)
        }
    }, i.fn.extend({
        offset: function (n) {
            if (arguments.length) return void 0 === n ? this : this.each(function (t) {
                i.offset.setOffset(this, n, t)
            });
            var t, f, u = {top: 0, left: 0}, r = this[0], e = r && r.ownerDocument;
            if (e) return (t = e.documentElement, i.contains(t, r) ? (void 0 !== r.getBoundingClientRect && (u = r.getBoundingClientRect()), f = ee(e), {
                top: u.top + (f.pageYOffset || t.scrollTop) - (t.clientTop || 0),
                left: u.left + (f.pageXOffset || t.scrollLeft) - (t.clientLeft || 0)
            }) : u)
        }, position: function () {
            if (this[0]) {
                var n, r, t = {top: 0, left: 0}, u = this[0];
                return "fixed" === i.css(u, "position") ? r = u.getBoundingClientRect() : (n = this.offsetParent(), r = this.offset(), i.nodeName(n[0], "html") || (t = n.offset()), t.top += i.css(n[0], "borderTopWidth", !0), t.left += i.css(n[0], "borderLeftWidth", !0)), {
                    top: r.top - t.top - i.css(u, "marginTop", !0),
                    left: r.left - t.left - i.css(u, "marginLeft", !0)
                }
            }
        }, offsetParent: function () {
            return this.map(function () {
                for (var n = this.offsetParent; n && !i.nodeName(n, "html") && "static" === i.css(n, "position");) n = n.offsetParent;
                return n || gu
            })
        }
    }), i.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (n, t) {
        var r = /Y/.test(t);
        i.fn[n] = function (u) {
            return y(this, function (n, u, f) {
                var e = ee(n);
                return void 0 === f ? e ? t in e ? e[t] : e.document.documentElement[u] : n[u] : void (e ? e.scrollTo(r ? i(e).scrollLeft() : f, r ? f : i(e).scrollTop()) : n[u] = f)
            }, n, u, arguments.length, null)
        }
    }), i.each(["top", "left"], function (n, t) {
        i.cssHooks[t] = bi(r.pixelPosition, function (n, r) {
            if (r) return (r = p(n, t), yt.test(r) ? i(n).position()[t] + "px" : r)
        })
    }), i.each({Height: "height", Width: "width"}, function (n, t) {
        i.each({padding: "inner" + n, content: t, "": "outer" + n}, function (r, u) {
            i.fn[u] = function (u, f) {
                var e = arguments.length && (r || "boolean" != typeof u),
                    o = r || (!0 === u || !0 === f ? "margin" : "border");
                return y(this, function (t, r, u) {
                    var f;
                    return i.isWindow(t) ? t.document.documentElement["client" + n] : 9 === t.nodeType ? (f = t.documentElement, Math.max(t.body["scroll" + n], f["scroll" + n], t.body["offset" + n], f["offset" + n], f["client" + n])) : void 0 === u ? i.css(t, r, o) : i.style(t, r, u, o)
                }, t, e ? u : void 0, e, null)
            }
        })
    }), i.fn.extend({
        bind: function (n, t, i) {
            return this.on(n, null, t, i)
        }, unbind: function (n, t) {
            return this.off(n, null, t)
        }, delegate: function (n, t, i, r) {
            return this.on(t, n, i, r)
        }, undelegate: function (n, t, i) {
            return 1 === arguments.length ? this.off(n, "**") : this.off(t, n || "**", i)
        }
    }), i.fn.size = function () {
        return this.length
    }, i.fn.andSelf = i.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function () {
        return i
    }), oe = n.jQuery, se = n.$, i.noConflict = function (t) {
        return n.$ === i && (n.$ = se), t && n.jQuery === i && (n.jQuery = oe), i
    }, t || (n.jQuery = n.$ = i), i
}), function (n) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], n) : "undefined" != typeof exports ? module.exports = n(require("jquery")) : n(jQuery)
}(function (n) {
    "use strict";
    var t = window.Slick || {};
    (t = function () {
        var t = 0;
        return function (i, r) {
            var f, u = this;
            u.defaults = {
                accessibility: !0,
                adaptiveHeight: !1,
                appendArrows: n(i),
                appendDots: n(i),
                arrows: !0,
                asNavFor: null,
                prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous<\/button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next<\/button>',
                autoplay: !1,
                autoplaySpeed: 3e3,
                centerMode: !1,
                centerPadding: "50px",
                cssEase: "ease",
                customPaging: function (t, i) {
                    return n('<button type="button" data-role="none" role="button" tabindex="0" />').text(i + 1)
                },
                dots: !1,
                dotsClass: "slick-dots",
                draggable: !0,
                easing: "linear",
                edgeFriction: .35,
                fade: !1,
                focusOnSelect: !1,
                infinite: !0,
                initialSlide: 0,
                lazyLoad: "ondemand",
                mobileFirst: !1,
                pauseOnHover: !0,
                pauseOnFocus: !0,
                pauseOnDotsHover: !1,
                respondTo: "window",
                responsive: null,
                rows: 1,
                rtl: !1,
                slide: "",
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                swipe: !0,
                swipeToSlide: !1,
                touchMove: !0,
                touchThreshold: 5,
                useCSS: !0,
                useTransform: !0,
                variableWidth: !1,
                vertical: !1,
                verticalSwiping: !1,
                waitForAnimate: !0,
                zIndex: 1e3
            };
            u.initials = {
                animating: !1,
                dragging: !1,
                autoPlayTimer: null,
                currentDirection: 0,
                currentLeft: null,
                currentSlide: 0,
                direction: 1,
                $dots: null,
                listWidth: null,
                listHeight: null,
                loadIndex: 0,
                $nextArrow: null,
                $prevArrow: null,
                slideCount: null,
                slideWidth: null,
                $slideTrack: null,
                $slides: null,
                sliding: !1,
                slideOffset: 0,
                swipeLeft: null,
                $list: null,
                touchObject: {},
                transformsEnabled: !1,
                unslicked: !1
            };
            n.extend(u, u.initials);
            u.activeBreakpoint = null;
            u.animType = null;
            u.animProp = null;
            u.breakpoints = [];
            u.breakpointSettings = [];
            u.cssTransitions = !1;
            u.focussed = !1;
            u.interrupted = !1;
            u.hidden = "hidden";
            u.paused = !0;
            u.positionProp = null;
            u.respondTo = null;
            u.rowCount = 1;
            u.shouldClick = !0;
            u.$slider = n(i);
            u.$slidesCache = null;
            u.transformType = null;
            u.transitionType = null;
            u.visibilityChange = "visibilitychange";
            u.windowWidth = 0;
            u.windowTimer = null;
            f = n(i).data("slick") || {};
            u.options = n.extend({}, u.defaults, r, f);
            u.currentSlide = u.options.initialSlide;
            u.originalSettings = u.options;
            void 0 !== document.mozHidden ? (u.hidden = "mozHidden", u.visibilityChange = "mozvisibilitychange") : void 0 !== document.webkitHidden && (u.hidden = "webkitHidden", u.visibilityChange = "webkitvisibilitychange");
            u.autoPlay = n.proxy(u.autoPlay, u);
            u.autoPlayClear = n.proxy(u.autoPlayClear, u);
            u.autoPlayIterator = n.proxy(u.autoPlayIterator, u);
            u.changeSlide = n.proxy(u.changeSlide, u);
            u.clickHandler = n.proxy(u.clickHandler, u);
            u.selectHandler = n.proxy(u.selectHandler, u);
            u.setPosition = n.proxy(u.setPosition, u);
            u.swipeHandler = n.proxy(u.swipeHandler, u);
            u.dragHandler = n.proxy(u.dragHandler, u);
            u.keyHandler = n.proxy(u.keyHandler, u);
            u.instanceUid = t++;
            u.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/;
            u.registerBreakpoints();
            u.init(!0)
        }
    }()).prototype.activateADA = function () {
        this.$slideTrack.find(".slick-active").attr({"aria-hidden": "false"}).find("a, input, button, select").attr({tabindex: "0"})
    };
    t.prototype.addSlide = t.prototype.slickAdd = function (t, i, r) {
        var u = this;
        if ("boolean" == typeof i) r = i, i = null; else if (0 > i || i >= u.slideCount) return !1;
        u.unload();
        "number" == typeof i ? 0 === i && 0 === u.$slides.length ? n(t).appendTo(u.$slideTrack) : r ? n(t).insertBefore(u.$slides.eq(i)) : n(t).insertAfter(u.$slides.eq(i)) : !0 === r ? n(t).prependTo(u.$slideTrack) : n(t).appendTo(u.$slideTrack);
        u.$slides = u.$slideTrack.children(this.options.slide);
        u.$slideTrack.children(this.options.slide).detach();
        u.$slideTrack.append(u.$slides);
        u.$slides.each(function (t, i) {
            n(i).attr("data-slick-index", t)
        });
        u.$slidesCache = u.$slides;
        u.reinit()
    };
    t.prototype.animateHeight = function () {
        var n = this, t;
        1 === n.options.slidesToShow && !0 === n.options.adaptiveHeight && !1 === n.options.vertical && (t = n.$slides.eq(n.currentSlide).outerHeight(!0), n.$list.animate({height: t}, n.options.speed))
    };
    t.prototype.animateSlide = function (t, i) {
        var u = {}, r = this;
        r.animateHeight();
        !0 === r.options.rtl && !1 === r.options.vertical && (t = -t);
        !1 === r.transformsEnabled ? !1 === r.options.vertical ? r.$slideTrack.animate({left: t}, r.options.speed, r.options.easing, i) : r.$slideTrack.animate({top: t}, r.options.speed, r.options.easing, i) : !1 === r.cssTransitions ? (!0 === r.options.rtl && (r.currentLeft = -r.currentLeft), n({animStart: r.currentLeft}).animate({animStart: t}, {
            duration: r.options.speed,
            easing: r.options.easing,
            step: function (n) {
                n = Math.ceil(n);
                !1 === r.options.vertical ? (u[r.animType] = "translate(" + n + "px, 0px)", r.$slideTrack.css(u)) : (u[r.animType] = "translate(0px," + n + "px)", r.$slideTrack.css(u))
            },
            complete: function () {
                i && i.call()
            }
        })) : (r.applyTransition(), t = Math.ceil(t), u[r.animType] = !1 === r.options.vertical ? "translate3d(" + t + "px, 0px, 0px)" : "translate3d(0px," + t + "px, 0px)", r.$slideTrack.css(u), i && setTimeout(function () {
            r.disableTransition();
            i.call()
        }, r.options.speed))
    };
    t.prototype.getNavTarget = function () {
        var t = this.options.asNavFor;
        return t && null !== t && (t = n(t).not(this.$slider)), t
    };
    t.prototype.asNavFor = function (t) {
        var i = this.getNavTarget();
        null !== i && "object" == typeof i && i.each(function () {
            var i = n(this).slick("getSlick");
            i.unslicked || i.slideHandler(t, !0)
        })
    };
    t.prototype.applyTransition = function (n) {
        var t = this, i = {};
        i[t.transitionType] = !1 === t.options.fade ? t.transformType + " " + t.options.speed + "ms " + t.options.cssEase : "opacity " + t.options.speed + "ms " + t.options.cssEase;
        !1 === t.options.fade ? t.$slideTrack.css(i) : t.$slides.eq(n).css(i)
    };
    t.prototype.autoPlay = function () {
        var n = this;
        n.autoPlayClear();
        n.slideCount > n.options.slidesToShow && (n.autoPlayTimer = setInterval(n.autoPlayIterator, n.options.autoplaySpeed))
    };
    t.prototype.autoPlayClear = function () {
        this.autoPlayTimer && clearInterval(this.autoPlayTimer)
    };
    t.prototype.autoPlayIterator = function () {
        var n = this, t = n.currentSlide + n.options.slidesToScroll;
        n.paused || n.interrupted || n.focussed || (!1 === n.options.infinite && (1 === n.direction && n.currentSlide + 1 === n.slideCount - 1 ? n.direction = 0 : 0 === n.direction && (t = n.currentSlide - n.options.slidesToScroll, n.currentSlide - 1 == 0 && (n.direction = 1))), n.slideHandler(t))
    };
    t.prototype.buildArrows = function () {
        var t = this;
        !0 === t.options.arrows && (t.$prevArrow = n(t.options.prevArrow).addClass("slick-arrow"), t.$nextArrow = n(t.options.nextArrow).addClass("slick-arrow"), t.slideCount > t.options.slidesToShow ? (t.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), t.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.prependTo(t.options.appendArrows), t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.appendTo(t.options.appendArrows), !0 !== t.options.infinite && t.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : t.$prevArrow.add(t.$nextArrow).addClass("slick-hidden").attr({
            "aria-disabled": "true",
            tabindex: "-1"
        }))
    };
    t.prototype.buildDots = function () {
        var i, r, t = this;
        if (!0 === t.options.dots && t.slideCount > t.options.slidesToShow) {
            for (t.$slider.addClass("slick-dotted"), r = n("<ul />").addClass(t.options.dotsClass), i = 0; i <= t.getDotCount(); i += 1) r.append(n("<li />").append(t.options.customPaging.call(this, t, i)));
            t.$dots = r.appendTo(t.options.appendDots);
            t.$dots.find("li").first().addClass("slick-active").attr("aria-hidden", "false")
        }
    };
    t.prototype.buildOut = function () {
        var t = this;
        t.$slides = t.$slider.children(t.options.slide + ":not(.slick-cloned)").addClass("slick-slide");
        t.slideCount = t.$slides.length;
        t.$slides.each(function (t, i) {
            n(i).attr("data-slick-index", t).data("originalStyling", n(i).attr("style") || "")
        });
        t.$slider.addClass("slick-slider");
        t.$slideTrack = 0 === t.slideCount ? n('<div class="slick-track"/>').appendTo(t.$slider) : t.$slides.wrapAll('<div class="slick-track"/>').parent();
        t.$list = t.$slideTrack.wrap('<div aria-live="polite" class="slick-list"/>').parent();
        t.$slideTrack.css("opacity", 0);
        (!0 === t.options.centerMode || !0 === t.options.swipeToSlide) && (t.options.slidesToScroll = 1);
        n("img[data-lazy]", t.$slider).not("[src]").addClass("slick-loading");
        t.setupInfinite();
        t.buildArrows();
        t.buildDots();
        t.updateDots();
        t.setSlideClasses("number" == typeof t.currentSlide ? t.currentSlide : 0);
        !0 === t.options.draggable && t.$list.addClass("draggable")
    };
    t.prototype.buildRows = function () {
        var t, i, r, f, c, u, e, n = this, o, s, h;
        if (f = document.createDocumentFragment(), u = n.$slider.children(), n.options.rows > 1) {
            for (e = n.options.slidesPerRow * n.options.rows, c = Math.ceil(u.length / e), t = 0; c > t; t++) {
                for (o = document.createElement("div"), i = 0; i < n.options.rows; i++) {
                    for (s = document.createElement("div"), r = 0; r < n.options.slidesPerRow; r++) h = t * e + (i * n.options.slidesPerRow + r), u.get(h) && s.appendChild(u.get(h));
                    o.appendChild(s)
                }
                f.appendChild(o)
            }
            n.$slider.empty().append(f);
            n.$slider.children().children().children().css({
                width: 100 / n.options.slidesPerRow + "%",
                display: "inline-block"
            })
        }
    };
    t.prototype.checkResponsive = function (t, i) {
        var f, u, e, r = this, o = !1, s = r.$slider.width(), h = window.innerWidth || n(window).width();
        if ("window" === r.respondTo ? e = h : "slider" === r.respondTo ? e = s : "min" === r.respondTo && (e = Math.min(h, s)), r.options.responsive && r.options.responsive.length && null !== r.options.responsive) {
            for (f in u = null, r.breakpoints) r.breakpoints.hasOwnProperty(f) && (!1 === r.originalSettings.mobileFirst ? e < r.breakpoints[f] && (u = r.breakpoints[f]) : e > r.breakpoints[f] && (u = r.breakpoints[f]));
            null !== u ? null !== r.activeBreakpoint ? (u !== r.activeBreakpoint || i) && (r.activeBreakpoint = u, "unslick" === r.breakpointSettings[u] ? r.unslick(u) : (r.options = n.extend({}, r.originalSettings, r.breakpointSettings[u]), !0 === t && (r.currentSlide = r.options.initialSlide), r.refresh(t)), o = u) : (r.activeBreakpoint = u, "unslick" === r.breakpointSettings[u] ? r.unslick(u) : (r.options = n.extend({}, r.originalSettings, r.breakpointSettings[u]), !0 === t && (r.currentSlide = r.options.initialSlide), r.refresh(t)), o = u) : null !== r.activeBreakpoint && (r.activeBreakpoint = null, r.options = r.originalSettings, !0 === t && (r.currentSlide = r.options.initialSlide), r.refresh(t), o = u);
            t || !1 === o || r.$slider.trigger("breakpoint", [r, o])
        }
    };
    t.prototype.changeSlide = function (t, i) {
        var f, e, r = this, u = n(t.currentTarget), o;
        switch (u.is("a") && t.preventDefault(), u.is("li") || (u = u.closest("li")), f = r.slideCount % r.options.slidesToScroll != 0 ? 0 : (r.slideCount - r.currentSlide) % r.options.slidesToScroll, t.data.message) {
            case"previous":
                e = 0 === f ? r.options.slidesToScroll : r.options.slidesToShow - f;
                r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide - e, !1, i);
                break;
            case"next":
                e = 0 === f ? r.options.slidesToScroll : f;
                r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide + e, !1, i);
                break;
            case"index":
                o = 0 === t.data.index ? 0 : t.data.index || u.index() * r.options.slidesToScroll;
                r.slideHandler(r.checkNavigable(o), !1, i);
                u.children().trigger("focus");
                break;
            default:
                return
        }
    };
    t.prototype.checkNavigable = function (n) {
        var t, i, r;
        if (i = 0, n > (t = this.getNavigableIndexes())[t.length - 1]) n = t[t.length - 1]; else for (r in t) {
            if (n < t[r]) {
                n = i;
                break
            }
            i = t[r]
        }
        return n
    };
    t.prototype.cleanUpEvents = function () {
        var t = this;
        t.options.dots && null !== t.$dots && n("li", t.$dots).off("click.slick", t.changeSlide).off("mouseenter.slick", n.proxy(t.interrupt, t, !0)).off("mouseleave.slick", n.proxy(t.interrupt, t, !1));
        t.$slider.off("focus.slick blur.slick");
        !0 === t.options.arrows && t.slideCount > t.options.slidesToShow && (t.$prevArrow && t.$prevArrow.off("click.slick", t.changeSlide), t.$nextArrow && t.$nextArrow.off("click.slick", t.changeSlide));
        t.$list.off("touchstart.slick mousedown.slick", t.swipeHandler);
        t.$list.off("touchmove.slick mousemove.slick", t.swipeHandler);
        t.$list.off("touchend.slick mouseup.slick", t.swipeHandler);
        t.$list.off("touchcancel.slick mouseleave.slick", t.swipeHandler);
        t.$list.off("click.slick", t.clickHandler);
        n(document).off(t.visibilityChange, t.visibility);
        t.cleanUpSlideEvents();
        !0 === t.options.accessibility && t.$list.off("keydown.slick", t.keyHandler);
        !0 === t.options.focusOnSelect && n(t.$slideTrack).children().off("click.slick", t.selectHandler);
        n(window).off("orientationchange.slick.slick-" + t.instanceUid, t.orientationChange);
        n(window).off("resize.slick.slick-" + t.instanceUid, t.resize);
        n("[draggable!=true]", t.$slideTrack).off("dragstart", t.preventDefault);
        n(window).off("load.slick.slick-" + t.instanceUid, t.setPosition);
        n(document).off("ready.slick.slick-" + t.instanceUid, t.setPosition)
    };
    t.prototype.cleanUpSlideEvents = function () {
        var t = this;
        t.$list.off("mouseenter.slick", n.proxy(t.interrupt, t, !0));
        t.$list.off("mouseleave.slick", n.proxy(t.interrupt, t, !1))
    };
    t.prototype.cleanUpRows = function () {
        var t, n = this;
        n.options.rows > 1 && ((t = n.$slides.children().children()).removeAttr("style"), n.$slider.empty().append(t))
    };
    t.prototype.clickHandler = function (n) {
        !1 === this.shouldClick && (n.stopImmediatePropagation(), n.stopPropagation(), n.preventDefault())
    };
    t.prototype.destroy = function (t) {
        var i = this;
        i.autoPlayClear();
        i.touchObject = {};
        i.cleanUpEvents();
        n(".slick-cloned", i.$slider).detach();
        i.$dots && i.$dots.remove();
        i.$prevArrow && i.$prevArrow.length && (i.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.prevArrow) && i.$prevArrow.remove());
        i.$nextArrow && i.$nextArrow.length && (i.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.nextArrow) && i.$nextArrow.remove());
        i.$slides && (i.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function () {
            n(this).attr("style", n(this).data("originalStyling"))
        }), i.$slideTrack.children(this.options.slide).detach(), i.$slideTrack.detach(), i.$list.detach(), i.$slider.append(i.$slides));
        i.cleanUpRows();
        i.$slider.removeClass("slick-slider");
        i.$slider.removeClass("slick-initialized");
        i.$slider.removeClass("slick-dotted");
        i.unslicked = !0;
        t || i.$slider.trigger("destroy", [i])
    };
    t.prototype.disableTransition = function (n) {
        var t = this, i = {};
        i[t.transitionType] = "";
        !1 === t.options.fade ? t.$slideTrack.css(i) : t.$slides.eq(n).css(i)
    };
    t.prototype.fadeSlide = function (n, t) {
        var i = this;
        !1 === i.cssTransitions ? (i.$slides.eq(n).css({zIndex: i.options.zIndex}), i.$slides.eq(n).animate({opacity: 1}, i.options.speed, i.options.easing, t)) : (i.applyTransition(n), i.$slides.eq(n).css({
            opacity: 1,
            zIndex: i.options.zIndex
        }), t && setTimeout(function () {
            i.disableTransition(n);
            t.call()
        }, i.options.speed))
    };
    t.prototype.fadeSlideOut = function (n) {
        var t = this;
        !1 === t.cssTransitions ? t.$slides.eq(n).animate({
            opacity: 0,
            zIndex: t.options.zIndex - 2
        }, t.options.speed, t.options.easing) : (t.applyTransition(n), t.$slides.eq(n).css({
            opacity: 0,
            zIndex: t.options.zIndex - 2
        }))
    };
    t.prototype.filterSlides = t.prototype.slickFilter = function (n) {
        var t = this;
        null !== n && (t.$slidesCache = t.$slides, t.unload(), t.$slideTrack.children(this.options.slide).detach(), t.$slidesCache.filter(n).appendTo(t.$slideTrack), t.reinit())
    };
    t.prototype.focusHandler = function () {
        var t = this;
        t.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*:not(.slick-arrow)", function (i) {
            i.stopImmediatePropagation();
            var r = n(this);
            setTimeout(function () {
                t.options.pauseOnFocus && (t.focussed = r.is(":focus"), t.autoPlay())
            }, 0)
        })
    };
    t.prototype.getCurrent = t.prototype.slickCurrentSlide = function () {
        return this.currentSlide
    };
    t.prototype.getDotCount = function () {
        var n = this, i = 0, r = 0, t = 0;
        if (!0 === n.options.infinite) for (; i < n.slideCount;) ++t, i = r + n.options.slidesToScroll, r += n.options.slidesToScroll <= n.options.slidesToShow ? n.options.slidesToScroll : n.options.slidesToShow; else if (!0 === n.options.centerMode) t = n.slideCount; else if (n.options.asNavFor) for (; i < n.slideCount;) ++t, i = r + n.options.slidesToScroll, r += n.options.slidesToScroll <= n.options.slidesToShow ? n.options.slidesToScroll : n.options.slidesToShow; else t = 1 + Math.ceil((n.slideCount - n.options.slidesToShow) / n.options.slidesToScroll);
        return t - 1
    };
    t.prototype.getLeft = function (n) {
        var f, r, i, t = this, u = 0;
        return t.slideOffset = 0, r = t.$slides.first().outerHeight(!0), !0 === t.options.infinite ? (t.slideCount > t.options.slidesToShow && (t.slideOffset = t.slideWidth * t.options.slidesToShow * -1, u = r * t.options.slidesToShow * -1), t.slideCount % t.options.slidesToScroll != 0 && n + t.options.slidesToScroll > t.slideCount && t.slideCount > t.options.slidesToShow && (n > t.slideCount ? (t.slideOffset = (t.options.slidesToShow - (n - t.slideCount)) * t.slideWidth * -1, u = (t.options.slidesToShow - (n - t.slideCount)) * r * -1) : (t.slideOffset = t.slideCount % t.options.slidesToScroll * t.slideWidth * -1, u = t.slideCount % t.options.slidesToScroll * r * -1))) : n + t.options.slidesToShow > t.slideCount && (t.slideOffset = (n + t.options.slidesToShow - t.slideCount) * t.slideWidth, u = (n + t.options.slidesToShow - t.slideCount) * r), t.slideCount <= t.options.slidesToShow && (t.slideOffset = 0, u = 0), !0 === t.options.centerMode && !0 === t.options.infinite ? t.slideOffset += t.slideWidth * Math.floor(t.options.slidesToShow / 2) - t.slideWidth : !0 === t.options.centerMode && (t.slideOffset = 0, t.slideOffset += t.slideWidth * Math.floor(t.options.slidesToShow / 2)), f = !1 === t.options.vertical ? n * t.slideWidth * -1 + t.slideOffset : n * r * -1 + u, !0 === t.options.variableWidth && (i = t.slideCount <= t.options.slidesToShow || !1 === t.options.infinite ? t.$slideTrack.children(".slick-slide").eq(n) : t.$slideTrack.children(".slick-slide").eq(n + t.options.slidesToShow), f = !0 === t.options.rtl ? i[0] ? -1 * (t.$slideTrack.width() - i[0].offsetLeft - i.width()) : 0 : i[0] ? -1 * i[0].offsetLeft : 0, !0 === t.options.centerMode && (i = t.slideCount <= t.options.slidesToShow || !1 === t.options.infinite ? t.$slideTrack.children(".slick-slide").eq(n) : t.$slideTrack.children(".slick-slide").eq(n + t.options.slidesToShow + 1), f = !0 === t.options.rtl ? i[0] ? -1 * (t.$slideTrack.width() - i[0].offsetLeft - i.width()) : 0 : i[0] ? -1 * i[0].offsetLeft : 0, f += (t.$list.width() - i.outerWidth()) / 2)), f
    };
    t.prototype.getOption = t.prototype.slickGetOption = function (n) {
        return this.options[n]
    };
    t.prototype.getNavigableIndexes = function () {
        var i, n = this, t = 0, r = 0, u = [];
        for (!1 === n.options.infinite ? i = n.slideCount : (t = -1 * n.options.slidesToScroll, r = -1 * n.options.slidesToScroll, i = 2 * n.slideCount); i > t;) u.push(t), t = r + n.options.slidesToScroll, r += n.options.slidesToScroll <= n.options.slidesToShow ? n.options.slidesToScroll : n.options.slidesToShow;
        return u
    };
    t.prototype.getSlick = function () {
        return this
    };
    t.prototype.getSlideCount = function () {
        var i, r, t = this;
        return r = !0 === t.options.centerMode ? t.slideWidth * Math.floor(t.options.slidesToShow / 2) : 0, !0 === t.options.swipeToSlide ? (t.$slideTrack.find(".slick-slide").each(function (u, f) {
            if (f.offsetLeft - r + n(f).outerWidth() / 2 > -1 * t.swipeLeft) return (i = f, !1)
        }), Math.abs(n(i).attr("data-slick-index") - t.currentSlide) || 1) : t.options.slidesToScroll
    };
    t.prototype.goTo = t.prototype.slickGoTo = function (n, t) {
        this.changeSlide({data: {message: "index", index: parseInt(n)}}, t)
    };
    t.prototype.init = function (t) {
        var i = this;
        n(i.$slider).hasClass("slick-initialized") || (n(i.$slider).addClass("slick-initialized"), i.buildRows(), i.buildOut(), i.setProps(), i.startLoad(), i.loadSlider(), i.initializeEvents(), i.updateArrows(), i.updateDots(), i.checkResponsive(!0), i.focusHandler());
        t && i.$slider.trigger("init", [i]);
        !0 === i.options.accessibility && i.initADA();
        i.options.autoplay && (i.paused = !1, i.autoPlay())
    };
    t.prototype.initADA = function () {
        var t = this;
        t.$slides.add(t.$slideTrack.find(".slick-cloned")).attr({
            "aria-hidden": "true",
            tabindex: "-1"
        }).find("a, input, button, select").attr({tabindex: "-1"});
        t.$slideTrack.attr("role", "listbox");
        t.$slides.not(t.$slideTrack.find(".slick-cloned")).each(function (i) {
            n(this).attr({role: "option", "aria-describedby": "slick-slide" + t.instanceUid + i})
        });
        null !== t.$dots && t.$dots.attr("role", "tablist").find("li").each(function (i) {
            n(this).attr({
                role: "presentation",
                "aria-selected": "false",
                "aria-controls": "navigation" + t.instanceUid + i,
                id: "slick-slide" + t.instanceUid + i
            })
        }).first().attr("aria-selected", "true").end().find("button").attr("role", "button").end().closest("div").attr("role", "toolbar");
        t.activateADA()
    };
    t.prototype.initArrowEvents = function () {
        var n = this;
        !0 === n.options.arrows && n.slideCount > n.options.slidesToShow && (n.$prevArrow.off("click.slick").on("click.slick", {message: "previous"}, n.changeSlide), n.$nextArrow.off("click.slick").on("click.slick", {message: "next"}, n.changeSlide))
    };
    t.prototype.initDotEvents = function () {
        var t = this;
        !0 === t.options.dots && t.slideCount > t.options.slidesToShow && n("li", t.$dots).on("click.slick", {message: "index"}, t.changeSlide);
        !0 === t.options.dots && !0 === t.options.pauseOnDotsHover && n("li", t.$dots).on("mouseenter.slick", n.proxy(t.interrupt, t, !0)).on("mouseleave.slick", n.proxy(t.interrupt, t, !1))
    };
    t.prototype.initSlideEvents = function () {
        var t = this;
        t.options.pauseOnHover && (t.$list.on("mouseenter.slick", n.proxy(t.interrupt, t, !0)), t.$list.on("mouseleave.slick", n.proxy(t.interrupt, t, !1)))
    };
    t.prototype.initializeEvents = function () {
        var t = this;
        t.initArrowEvents();
        t.initDotEvents();
        t.initSlideEvents();
        t.$list.on("touchstart.slick mousedown.slick", {action: "start"}, t.swipeHandler);
        t.$list.on("touchmove.slick mousemove.slick", {action: "move"}, t.swipeHandler);
        t.$list.on("touchend.slick mouseup.slick", {action: "end"}, t.swipeHandler);
        t.$list.on("touchcancel.slick mouseleave.slick", {action: "end"}, t.swipeHandler);
        t.$list.on("click.slick", t.clickHandler);
        n(document).on(t.visibilityChange, n.proxy(t.visibility, t));
        !0 === t.options.accessibility && t.$list.on("keydown.slick", t.keyHandler);
        !0 === t.options.focusOnSelect && n(t.$slideTrack).children().on("click.slick", t.selectHandler);
        n(window).on("orientationchange.slick.slick-" + t.instanceUid, n.proxy(t.orientationChange, t));
        n(window).on("resize.slick.slick-" + t.instanceUid, n.proxy(t.resize, t));
        n("[draggable!=true]", t.$slideTrack).on("dragstart", t.preventDefault);
        n(window).on("load.slick.slick-" + t.instanceUid, t.setPosition);
        n(document).on("ready.slick.slick-" + t.instanceUid, t.setPosition)
    };
    t.prototype.initUI = function () {
        var n = this;
        !0 === n.options.arrows && n.slideCount > n.options.slidesToShow && (n.$prevArrow.show(), n.$nextArrow.show());
        !0 === n.options.dots && n.slideCount > n.options.slidesToShow && n.$dots.show()
    };
    t.prototype.keyHandler = function (n) {
        var t = this;
        n.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === n.keyCode && !0 === t.options.accessibility ? t.changeSlide({data: {message: !0 === t.options.rtl ? "next" : "previous"}}) : 39 === n.keyCode && !0 === t.options.accessibility && t.changeSlide({data: {message: !0 === t.options.rtl ? "previous" : "next"}}))
    };
    t.prototype.lazyLoad = function () {
        function u(i) {
            n("img[data-lazy]", i).each(function () {
                var i = n(this), r = n(this).attr("data-lazy"), u = document.createElement("img");
                u.onload = function () {
                    i.animate({opacity: 0}, 100, function () {
                        i.attr("src", r).animate({opacity: 1}, 200, function () {
                            i.removeAttr("data-lazy").removeClass("slick-loading")
                        });
                        t.$slider.trigger("lazyLoaded", [t, i, r])
                    })
                };
                u.onerror = function () {
                    i.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error");
                    t.$slider.trigger("lazyLoadError", [t, i, r])
                };
                u.src = r
            })
        }

        var i, r, t = this;
        !0 === t.options.centerMode ? !0 === t.options.infinite ? r = (i = t.currentSlide + (t.options.slidesToShow / 2 + 1)) + t.options.slidesToShow + 2 : (i = Math.max(0, t.currentSlide - (t.options.slidesToShow / 2 + 1)), r = t.options.slidesToShow / 2 + 1 + 2 + t.currentSlide) : (i = t.options.infinite ? t.options.slidesToShow + t.currentSlide : t.currentSlide, r = Math.ceil(i + t.options.slidesToShow), !0 === t.options.fade && (i > 0 && i--, r <= t.slideCount && r++));
        u(t.$slider.find(".slick-slide").slice(i, r));
        t.slideCount <= t.options.slidesToShow ? u(t.$slider.find(".slick-slide")) : t.currentSlide >= t.slideCount - t.options.slidesToShow ? u(t.$slider.find(".slick-cloned").slice(0, t.options.slidesToShow)) : 0 === t.currentSlide && u(t.$slider.find(".slick-cloned").slice(-1 * t.options.slidesToShow))
    };
    t.prototype.loadSlider = function () {
        var n = this;
        n.setPosition();
        n.$slideTrack.css({opacity: 1});
        n.$slider.removeClass("slick-loading");
        n.initUI();
        "progressive" === n.options.lazyLoad && n.progressiveLazyLoad()
    };
    t.prototype.next = t.prototype.slickNext = function () {
        this.changeSlide({data: {message: "next"}})
    };
    t.prototype.orientationChange = function () {
        this.checkResponsive();
        this.setPosition()
    };
    t.prototype.pause = t.prototype.slickPause = function () {
        this.autoPlayClear();
        this.paused = !0
    };
    t.prototype.play = t.prototype.slickPlay = function () {
        var n = this;
        n.autoPlay();
        n.options.autoplay = !0;
        n.paused = !1;
        n.focussed = !1;
        n.interrupted = !1
    };
    t.prototype.postSlide = function (n) {
        var t = this;
        t.unslicked || (t.$slider.trigger("afterChange", [t, n]), t.animating = !1, t.setPosition(), t.swipeLeft = null, t.options.autoplay && t.autoPlay(), !0 === t.options.accessibility && t.initADA())
    };
    t.prototype.prev = t.prototype.slickPrev = function () {
        this.changeSlide({data: {message: "previous"}})
    };
    t.prototype.preventDefault = function (n) {
        n.preventDefault()
    };
    t.prototype.progressiveLazyLoad = function (t) {
        t = t || 1;
        var r, u, f, i = this, e = n("img[data-lazy]", i.$slider);
        e.length ? (r = e.first(), u = r.attr("data-lazy"), (f = document.createElement("img")).onload = function () {
            r.attr("src", u).removeAttr("data-lazy").removeClass("slick-loading");
            !0 === i.options.adaptiveHeight && i.setPosition();
            i.$slider.trigger("lazyLoaded", [i, r, u]);
            i.progressiveLazyLoad()
        }, f.onerror = function () {
            3 > t ? setTimeout(function () {
                i.progressiveLazyLoad(t + 1)
            }, 500) : (r.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), i.$slider.trigger("lazyLoadError", [i, r, u]), i.progressiveLazyLoad())
        }, f.src = u) : i.$slider.trigger("allImagesLoaded", [i])
    };
    t.prototype.refresh = function (t) {
        var r, u, i = this;
        u = i.slideCount - i.options.slidesToShow;
        !i.options.infinite && i.currentSlide > u && (i.currentSlide = u);
        i.slideCount <= i.options.slidesToShow && (i.currentSlide = 0);
        r = i.currentSlide;
        i.destroy(!0);
        n.extend(i, i.initials, {currentSlide: r});
        i.init();
        t || i.changeSlide({data: {message: "index", index: r}}, !1)
    };
    t.prototype.registerBreakpoints = function () {
        var u, f, i, t = this, r = t.options.responsive || null;
        if ("array" === n.type(r) && r.length) {
            for (u in t.respondTo = t.options.respondTo || "window", r) if (i = t.breakpoints.length - 1, f = r[u].breakpoint, r.hasOwnProperty(u)) {
                for (; i >= 0;) t.breakpoints[i] && t.breakpoints[i] === f && t.breakpoints.splice(i, 1), i--;
                t.breakpoints.push(f);
                t.breakpointSettings[f] = r[u].settings
            }
            t.breakpoints.sort(function (n, i) {
                return t.options.mobileFirst ? n - i : i - n
            })
        }
    };
    t.prototype.reinit = function () {
        var t = this;
        t.$slides = t.$slideTrack.children(t.options.slide).addClass("slick-slide");
        t.slideCount = t.$slides.length;
        t.currentSlide >= t.slideCount && 0 !== t.currentSlide && (t.currentSlide = t.currentSlide - t.options.slidesToScroll);
        t.slideCount <= t.options.slidesToShow && (t.currentSlide = 0);
        t.registerBreakpoints();
        t.setProps();
        t.setupInfinite();
        t.buildArrows();
        t.updateArrows();
        t.initArrowEvents();
        t.buildDots();
        t.updateDots();
        t.initDotEvents();
        t.cleanUpSlideEvents();
        t.initSlideEvents();
        t.checkResponsive(!1, !0);
        !0 === t.options.focusOnSelect && n(t.$slideTrack).children().on("click.slick", t.selectHandler);
        t.setSlideClasses("number" == typeof t.currentSlide ? t.currentSlide : 0);
        t.setPosition();
        t.focusHandler();
        t.paused = !t.options.autoplay;
        t.autoPlay();
        t.$slider.trigger("reInit", [t])
    };
    t.prototype.resize = function () {
        var t = this;
        n(window).width() !== t.windowWidth && (clearTimeout(t.windowDelay), t.windowDelay = window.setTimeout(function () {
            t.windowWidth = n(window).width();
            t.checkResponsive();
            t.unslicked || t.setPosition()
        }, 50))
    };
    t.prototype.removeSlide = t.prototype.slickRemove = function (n, t, i) {
        var r = this;
        return n = "boolean" == typeof n ? !0 === (t = n) ? 0 : r.slideCount - 1 : !0 === t ? --n : n, !(r.slideCount < 1 || 0 > n || n > r.slideCount - 1) && (r.unload(), !0 === i ? r.$slideTrack.children().remove() : r.$slideTrack.children(this.options.slide).eq(n).remove(), r.$slides = r.$slideTrack.children(this.options.slide), r.$slideTrack.children(this.options.slide).detach(), r.$slideTrack.append(r.$slides), r.$slidesCache = r.$slides, void r.reinit())
    };
    t.prototype.setCSS = function (n) {
        var r, u, t = this, i = {};
        !0 === t.options.rtl && (n = -n);
        r = "left" == t.positionProp ? Math.ceil(n) + "px" : "0px";
        u = "top" == t.positionProp ? Math.ceil(n) + "px" : "0px";
        i[t.positionProp] = n;
        !1 === t.transformsEnabled ? t.$slideTrack.css(i) : (i = {}, !1 === t.cssTransitions ? (i[t.animType] = "translate(" + r + ", " + u + ")", t.$slideTrack.css(i)) : (i[t.animType] = "translate3d(" + r + ", " + u + ", 0px)", t.$slideTrack.css(i)))
    };
    t.prototype.setDimensions = function () {
        var n = this, t;
        !1 === n.options.vertical ? !0 === n.options.centerMode && n.$list.css({padding: "0px " + n.options.centerPadding}) : (n.$list.height(n.$slides.first().outerHeight(!0) * n.options.slidesToShow), !0 === n.options.centerMode && n.$list.css({padding: n.options.centerPadding + " 0px"}));
        n.listWidth = n.$list.width();
        n.listHeight = n.$list.height();
        !1 === n.options.vertical && !1 === n.options.variableWidth ? (n.slideWidth = Math.ceil(n.listWidth / n.options.slidesToShow), n.$slideTrack.width(Math.ceil(n.slideWidth * n.$slideTrack.children(".slick-slide").length))) : !0 === n.options.variableWidth ? n.$slideTrack.width(5e3 * n.slideCount) : (n.slideWidth = Math.ceil(n.listWidth), n.$slideTrack.height(Math.ceil(n.$slides.first().outerHeight(!0) * n.$slideTrack.children(".slick-slide").length)));
        t = n.$slides.first().outerWidth(!0) - n.$slides.first().width();
        !1 === n.options.variableWidth && n.$slideTrack.children(".slick-slide").width(n.slideWidth - t)
    };
    t.prototype.setFade = function () {
        var i, t = this;
        t.$slides.each(function (r, u) {
            i = t.slideWidth * r * -1;
            !0 === t.options.rtl ? n(u).css({
                position: "relative",
                right: i,
                top: 0,
                zIndex: t.options.zIndex - 2,
                opacity: 0
            }) : n(u).css({position: "relative", left: i, top: 0, zIndex: t.options.zIndex - 2, opacity: 0})
        });
        t.$slides.eq(t.currentSlide).css({zIndex: t.options.zIndex - 1, opacity: 1})
    };
    t.prototype.setHeight = function () {
        var n = this, t;
        1 === n.options.slidesToShow && !0 === n.options.adaptiveHeight && !1 === n.options.vertical && (t = n.$slides.eq(n.currentSlide).outerHeight(!0), n.$list.css("height", t))
    };
    t.prototype.setOption = t.prototype.slickSetOption = function () {
        var u, f, e, i, r, t = this, o = !1;
        if ("object" === n.type(arguments[0]) ? (e = arguments[0], o = arguments[1], r = "multiple") : "string" === n.type(arguments[0]) && (e = arguments[0], i = arguments[1], o = arguments[2], "responsive" === arguments[0] && "array" === n.type(arguments[1]) ? r = "responsive" : void 0 !== arguments[1] && (r = "single")), "single" === r) t.options[e] = i; else if ("multiple" === r) n.each(e, function (n, i) {
            t.options[n] = i
        }); else if ("responsive" === r) for (f in i) if ("array" !== n.type(t.options.responsive)) t.options.responsive = [i[f]]; else {
            for (u = t.options.responsive.length - 1; u >= 0;) t.options.responsive[u].breakpoint === i[f].breakpoint && t.options.responsive.splice(u, 1), u--;
            t.options.responsive.push(i[f])
        }
        o && (t.unload(), t.reinit())
    };
    t.prototype.setPosition = function () {
        var n = this;
        n.setDimensions();
        n.setHeight();
        !1 === n.options.fade ? n.setCSS(n.getLeft(n.currentSlide)) : n.setFade();
        n.$slider.trigger("setPosition", [n])
    };
    t.prototype.setProps = function () {
        var n = this, t = document.body.style;
        n.positionProp = !0 === n.options.vertical ? "top" : "left";
        "top" === n.positionProp ? n.$slider.addClass("slick-vertical") : n.$slider.removeClass("slick-vertical");
        (void 0 !== t.WebkitTransition || void 0 !== t.MozTransition || void 0 !== t.msTransition) && !0 === n.options.useCSS && (n.cssTransitions = !0);
        n.options.fade && ("number" == typeof n.options.zIndex ? n.options.zIndex < 3 && (n.options.zIndex = 3) : n.options.zIndex = n.defaults.zIndex);
        void 0 !== t.OTransform && (n.animType = "OTransform", n.transformType = "-o-transform", n.transitionType = "OTransition", void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (n.animType = !1));
        void 0 !== t.MozTransform && (n.animType = "MozTransform", n.transformType = "-moz-transform", n.transitionType = "MozTransition", void 0 === t.perspectiveProperty && void 0 === t.MozPerspective && (n.animType = !1));
        void 0 !== t.webkitTransform && (n.animType = "webkitTransform", n.transformType = "-webkit-transform", n.transitionType = "webkitTransition", void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (n.animType = !1));
        void 0 !== t.msTransform && (n.animType = "msTransform", n.transformType = "-ms-transform", n.transitionType = "msTransition", void 0 === t.msTransform && (n.animType = !1));
        void 0 !== t.transform && !1 !== n.animType && (n.animType = "transform", n.transformType = "transform", n.transitionType = "transition");
        n.transformsEnabled = n.options.useTransform && null !== n.animType && !1 !== n.animType
    };
    t.prototype.setSlideClasses = function (n) {
        var u, i, r, f, t = this;
        i = t.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true");
        t.$slides.eq(n).addClass("slick-current");
        !0 === t.options.centerMode ? (u = Math.floor(t.options.slidesToShow / 2), !0 === t.options.infinite && (n >= u && n <= t.slideCount - 1 - u ? t.$slides.slice(n - u, n + u + 1).addClass("slick-active").attr("aria-hidden", "false") : (r = t.options.slidesToShow + n, i.slice(r - u + 1, r + u + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === n ? i.eq(i.length - 1 - t.options.slidesToShow).addClass("slick-center") : n === t.slideCount - 1 && i.eq(t.options.slidesToShow).addClass("slick-center")), t.$slides.eq(n).addClass("slick-center")) : n >= 0 && n <= t.slideCount - t.options.slidesToShow ? t.$slides.slice(n, n + t.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : i.length <= t.options.slidesToShow ? i.addClass("slick-active").attr("aria-hidden", "false") : (f = t.slideCount % t.options.slidesToShow, r = !0 === t.options.infinite ? t.options.slidesToShow + n : n, t.options.slidesToShow == t.options.slidesToScroll && t.slideCount - n < t.options.slidesToShow ? i.slice(r - (t.options.slidesToShow - f), r + f).addClass("slick-active").attr("aria-hidden", "false") : i.slice(r, r + t.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false"));
        "ondemand" === t.options.lazyLoad && t.lazyLoad()
    };
    t.prototype.setupInfinite = function () {
        var i, r, u, t = this;
        if (!0 === t.options.fade && (t.options.centerMode = !1), !0 === t.options.infinite && !1 === t.options.fade && (r = null, t.slideCount > t.options.slidesToShow)) {
            for (u = !0 === t.options.centerMode ? t.options.slidesToShow + 1 : t.options.slidesToShow, i = t.slideCount; i > t.slideCount - u; i -= 1) r = i - 1, n(t.$slides[r]).clone(!0).attr("id", "").attr("data-slick-index", r - t.slideCount).prependTo(t.$slideTrack).addClass("slick-cloned");
            for (i = 0; u > i; i += 1) r = i, n(t.$slides[r]).clone(!0).attr("id", "").attr("data-slick-index", r + t.slideCount).appendTo(t.$slideTrack).addClass("slick-cloned");
            t.$slideTrack.find(".slick-cloned").find("[id]").each(function () {
                n(this).attr("id", "")
            })
        }
    };
    t.prototype.interrupt = function (n) {
        n || this.autoPlay();
        this.interrupted = n
    };
    t.prototype.selectHandler = function (t) {
        var i = this, u = n(t.target).is(".slick-slide") ? n(t.target) : n(t.target).parents(".slick-slide"),
            r = parseInt(u.attr("data-slick-index"));
        return r || (r = 0), i.slideCount <= i.options.slidesToShow ? (i.setSlideClasses(r), void i.asNavFor(r)) : void i.slideHandler(r)
    };
    t.prototype.slideHandler = function (n, t, i) {
        var u, f, s, e, o, h = null, r = this;
        return t = t || !1, !0 === r.animating && !0 === r.options.waitForAnimate || !0 === r.options.fade && r.currentSlide === n || r.slideCount <= r.options.slidesToShow ? void 0 : (!1 === t && r.asNavFor(n), u = n, h = r.getLeft(u), e = r.getLeft(r.currentSlide), r.currentLeft = null === r.swipeLeft ? e : r.swipeLeft, !1 === r.options.infinite && !1 === r.options.centerMode && (0 > n || n > r.getDotCount() * r.options.slidesToScroll) ? void (!1 === r.options.fade && (u = r.currentSlide, !0 !== i ? r.animateSlide(e, function () {
            r.postSlide(u)
        }) : r.postSlide(u))) : !1 === r.options.infinite && !0 === r.options.centerMode && (0 > n || n > r.slideCount - r.options.slidesToScroll) ? void (!1 === r.options.fade && (u = r.currentSlide, !0 !== i ? r.animateSlide(e, function () {
            r.postSlide(u)
        }) : r.postSlide(u))) : (r.options.autoplay && clearInterval(r.autoPlayTimer), f = 0 > u ? r.slideCount % r.options.slidesToScroll != 0 ? r.slideCount - r.slideCount % r.options.slidesToScroll : r.slideCount + u : u >= r.slideCount ? r.slideCount % r.options.slidesToScroll != 0 ? 0 : u - r.slideCount : u, r.animating = !0, r.$slider.trigger("beforeChange", [r, r.currentSlide, f]), s = r.currentSlide, r.currentSlide = f, r.setSlideClasses(r.currentSlide), r.options.asNavFor && (o = (o = r.getNavTarget()).slick("getSlick")).slideCount <= o.options.slidesToShow && o.setSlideClasses(r.currentSlide), r.updateDots(), r.updateArrows(), !0 === r.options.fade ? (!0 !== i ? (r.fadeSlideOut(s), r.fadeSlide(f, function () {
            r.postSlide(f)
        })) : r.postSlide(f), void r.animateHeight()) : void (!0 !== i ? r.animateSlide(h, function () {
            r.postSlide(f)
        }) : r.postSlide(f))))
    };
    t.prototype.startLoad = function () {
        var n = this;
        !0 === n.options.arrows && n.slideCount > n.options.slidesToShow && (n.$prevArrow.hide(), n.$nextArrow.hide());
        !0 === n.options.dots && n.slideCount > n.options.slidesToShow && n.$dots.hide();
        n.$slider.addClass("slick-loading")
    };
    t.prototype.swipeDirection = function () {
        var i, r, u, n, t = this;
        return i = t.touchObject.startX - t.touchObject.curX, r = t.touchObject.startY - t.touchObject.curY, u = Math.atan2(r, i), 0 > (n = Math.round(180 * u / Math.PI)) && (n = 360 - Math.abs(n)), 45 >= n && n >= 0 ? !1 === t.options.rtl ? "left" : "right" : 360 >= n && n >= 315 ? !1 === t.options.rtl ? "left" : "right" : n >= 135 && 225 >= n ? !1 === t.options.rtl ? "right" : "left" : !0 === t.options.verticalSwiping ? n >= 35 && 135 >= n ? "down" : "up" : "vertical"
    };
    t.prototype.swipeEnd = function () {
        var t, i, n = this;
        if (n.dragging = !1, n.interrupted = !1, n.shouldClick = !(n.touchObject.swipeLength > 10), void 0 === n.touchObject.curX) return !1;
        if (!0 === n.touchObject.edgeHit && n.$slider.trigger("edge", [n, n.swipeDirection()]), n.touchObject.swipeLength >= n.touchObject.minSwipe) {
            switch (i = n.swipeDirection()) {
                case"left":
                case"down":
                    t = n.options.swipeToSlide ? n.checkNavigable(n.currentSlide + n.getSlideCount()) : n.currentSlide + n.getSlideCount();
                    n.currentDirection = 0;
                    break;
                case"right":
                case"up":
                    t = n.options.swipeToSlide ? n.checkNavigable(n.currentSlide - n.getSlideCount()) : n.currentSlide - n.getSlideCount();
                    n.currentDirection = 1
            }
            "vertical" != i && (n.slideHandler(t), n.touchObject = {}, n.$slider.trigger("swipe", [n, i]))
        } else n.touchObject.startX !== n.touchObject.curX && (n.slideHandler(n.currentSlide), n.touchObject = {})
    };
    t.prototype.swipeHandler = function (n) {
        var t = this;
        if (!(!1 === t.options.swipe || "ontouchend" in document && !1 === t.options.swipe || !1 === t.options.draggable && -1 !== n.type.indexOf("mouse"))) switch (t.touchObject.fingerCount = n.originalEvent && void 0 !== n.originalEvent.touches ? n.originalEvent.touches.length : 1, t.touchObject.minSwipe = t.listWidth / t.options.touchThreshold, !0 === t.options.verticalSwiping && (t.touchObject.minSwipe = t.listHeight / t.options.touchThreshold), n.data.action) {
            case"start":
                t.swipeStart(n);
                break;
            case"move":
                t.swipeMove(n);
                break;
            case"end":
                t.swipeEnd(n)
        }
    };
    t.prototype.swipeMove = function (n) {
        var f, e, r, u, i, t = this;
        return i = void 0 !== n.originalEvent ? n.originalEvent.touches : null, !(!t.dragging || i && 1 !== i.length) && (f = t.getLeft(t.currentSlide), t.touchObject.curX = void 0 !== i ? i[0].pageX : n.clientX, t.touchObject.curY = void 0 !== i ? i[0].pageY : n.clientY, t.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(t.touchObject.curX - t.touchObject.startX, 2))), !0 === t.options.verticalSwiping && (t.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(t.touchObject.curY - t.touchObject.startY, 2)))), "vertical" !== (e = t.swipeDirection()) ? (void 0 !== n.originalEvent && t.touchObject.swipeLength > 4 && n.preventDefault(), u = (!1 === t.options.rtl ? 1 : -1) * (t.touchObject.curX > t.touchObject.startX ? 1 : -1), !0 === t.options.verticalSwiping && (u = t.touchObject.curY > t.touchObject.startY ? 1 : -1), r = t.touchObject.swipeLength, t.touchObject.edgeHit = !1, !1 === t.options.infinite && (0 === t.currentSlide && "right" === e || t.currentSlide >= t.getDotCount() && "left" === e) && (r = t.touchObject.swipeLength * t.options.edgeFriction, t.touchObject.edgeHit = !0), t.swipeLeft = !1 === t.options.vertical ? f + r * u : f + r * (t.$list.height() / t.listWidth) * u, !0 === t.options.verticalSwiping && (t.swipeLeft = f + r * u), !0 !== t.options.fade && !1 !== t.options.touchMove && (!0 === t.animating ? (t.swipeLeft = null, !1) : void t.setCSS(t.swipeLeft))) : void 0)
    };
    t.prototype.swipeStart = function (n) {
        var i, t = this;
        return t.interrupted = !0, 1 !== t.touchObject.fingerCount || t.slideCount <= t.options.slidesToShow ? (t.touchObject = {}, !1) : (void 0 !== n.originalEvent && void 0 !== n.originalEvent.touches && (i = n.originalEvent.touches[0]), t.touchObject.startX = t.touchObject.curX = void 0 !== i ? i.pageX : n.clientX, t.touchObject.startY = t.touchObject.curY = void 0 !== i ? i.pageY : n.clientY, void (t.dragging = !0))
    };
    t.prototype.unfilterSlides = t.prototype.slickUnfilter = function () {
        var n = this;
        null !== n.$slidesCache && (n.unload(), n.$slideTrack.children(this.options.slide).detach(), n.$slidesCache.appendTo(n.$slideTrack), n.reinit())
    };
    t.prototype.unload = function () {
        var t = this;
        n(".slick-cloned", t.$slider).remove();
        t.$dots && t.$dots.remove();
        t.$prevArrow && t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove();
        t.$nextArrow && t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove();
        t.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
    };
    t.prototype.unslick = function (n) {
        var t = this;
        t.$slider.trigger("unslick", [t, n]);
        t.destroy()
    };
    t.prototype.updateArrows = function () {
        var n = this;
        Math.floor(n.options.slidesToShow / 2);
        !0 === n.options.arrows && n.slideCount > n.options.slidesToShow && !n.options.infinite && (n.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), n.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === n.currentSlide ? (n.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), n.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : n.currentSlide >= n.slideCount - n.options.slidesToShow && !1 === n.options.centerMode ? (n.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), n.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : n.currentSlide >= n.slideCount - 1 && !0 === n.options.centerMode && (n.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), n.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
    };
    t.prototype.updateDots = function () {
        var n = this;
        null !== n.$dots && (n.$dots.find("li").removeClass("slick-active").attr("aria-hidden", "true"), n.$dots.find("li").eq(Math.floor(n.currentSlide / n.options.slidesToScroll)).addClass("slick-active").attr("aria-hidden", "false"))
    };
    t.prototype.visibility = function () {
        var n = this;
        n.options.autoplay && (n.interrupted = document[n.hidden] ? !0 : !1)
    };
    n.fn.slick = function () {
        for (var u, i = this, r = arguments[0], f = Array.prototype.slice.call(arguments, 1), e = i.length, n = 0; e > n; n++) if ("object" == typeof r || void 0 === r ? i[n].slick = new t(i[n], r) : u = i[n].slick[r].apply(i[n].slick, f), void 0 !== u) return u;
        return i
    }
});
jQuery(document).ready(function (n) {
    n("body").addClass("page-loading");
    n(".btn-menu").click(function (t) {
        t.preventDefault();
        n(".btn-menu").toggleClass("open");
        n(".main-menu").toggleClass("open");
        n("body").toggleClass("modal-open")
    });
    n(window).scroll(function () {
        n(window).width() > 767 && (n(this).scrollTop() > 50 ? n("#header").addClass("sticky") : n("#header").removeClass("sticky"))
    });
    n(".page-banner").length > 0 && n("#header").addClass("header-dark");
    n(".section-form").length > 0 && n("#header").addClass("header-min");
    n(".accordion .panel-title").click(function () {
        return n(this).toggleClass("open"), n(this).parents(".accordion").find(".panel-body").slideToggle(400), !1
    });
    n(".amount-change").click(function (t) {
        t.preventDefault();
        var f = n(this).siblings(".loan-amount-input"), i = parseInt(f.val().replace(/[^\d\.]/g, "")), u = 100, r = 0;
        n(this).hasClass("amount-plus") ? !isNaN(i) && i < 5e3 ? (i < 1e3 && (u = 50), r = i + u) : r = 5e3 : !isNaN(i) && i > 100 ? (i < 1e3 && (u = 50), r = i - u) : r = 100;
        n(f).val("" + r)
    });
    n(".help-control").on("change", function () {
        var t = this.value;
        n(".box-help").hide();
        n("#" + t).show()
    });
    n("#benefit-icons > .col").length > 1 && n("#benefit-icons").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: !0,
        centerPadding: "50px",
        dots: !0,
        arrows: !1,
        mobileFirst: !0,
        responsive: [{breakpoint: 480, settings: {slidesToShow: 2, slidesToScroll: 2}}, {
            breakpoint: 768,
            settings: "unslick"
        }]
    });
    n(".testimonials > .testimonial").length > 1 && n(".testimonials").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: !0,
        arrows: !1,
        mobileFirst: !0,
        responsive: [{breakpoint: 480, settings: {slidesToShow: 2, slidesToScroll: 2}}, {
            breakpoint: 768,
            settings: "unslick"
        }]
    });
    n(".btn-search-lenders").click(function (t) {
        t.preventDefault();
        n(".section-form-searching").toggleClass("open");
        n("body").toggleClass("modal-open");
        window.setTimeout(function () {
            n(".section-form-searching").toggleClass("open");
            n("body").toggleClass("modal-open")
        }, 4e3)
    });
    n(".btn-loan-success").click(function (t) {
        t.preventDefault();
        n(".section-form-loan-success").toggleClass("open");
        n("body").toggleClass("modal-open");
        window.setTimeout(function () {
            n(".section-form-loan-success").toggleClass("open");
            n("body").toggleClass("modal-open")
        }, 4e3)
    });
    n(".btn-loan-failed").click(function (t) {
        t.preventDefault();
        n(".section-form-loan-failed").toggleClass("open");
        n("body").toggleClass("modal-open");
        window.setTimeout(function () {
            n(".section-form-loan-failed").toggleClass("open");
            n("body").toggleClass("modal-open")
        }, 4e3)
    })
});
var getUrl = window.location, baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split("/")[1],
    uping = {
        iframeSrc: "https://127.0.0.1:8001/api/application/post",
        mobileFormSrc: "https://127.0.0.1:8001/api/application/post",
        defaultAffiliate: "AFF_UP151",
        defaultSubAffiliate: null,
        defaultCampaign: null,
        defaultSiteAffiliate: null,
        mobileBannerImage: baseUrl + "/Content/Images/moneypod-mobile.png",
        detectMobile: !0,
        cookieExpiryTime: 1,
        getValue: function (n) {
            var t = jQuery.parseJSON(uping.readCookie()), i;
            if (t !== undefined && t !== null) for (i in t) if (i === n) return t[i];
            return null
        },
        setAffiliateId: function (n) {
            uping.defaultAffiliate = n === undefined || n === null || n.length < 1 ? "AFF_UP151" : n
        },
        setSubAffiliate: function (n) {
            uping.defaultSubAffiliate = n === undefined || n === null || n.length < 1 ? null : n
        },
        setCampaign: function (n) {
            uping.defaultCampaign = n === undefined || n === null || n.length < 1 ? null : n
        },
        setValue: function (n, t) {
            var r = !1, i = jQuery.parseJSON(uping.readCookie()), u;
            if (i !== undefined && i !== null) for (u in i) u === n && (i[n] = t, r = !0);
            r || ((i === undefined || i === null) && (i = {}), i[n] = t);
            uping.createCookie(i)
        },
        buildIframeApplyLink: function () {
            var e = uping.getUrlVars(), n = [], o = [], t, i, r, u, f, s;
            n.id = uping.defaultAffiliate;
            n.subid = uping.defaultSubAffiliate === null ? "" : uping.defaultSubAffiliate;
            n.campaign = uping.defaultCampaign === null ? "" : uping.defaultCampaign;
            t = jQuery.parseJSON(uping.readCookie());
            for (i in t) n[i] = t[i];
            for (r in e) n[r] = e[r];
            u = 0;
            for (f in n) o[u] = f + "=" + n[f], u++;
            return s = o.join("&"), "?" + s
        },
        buildMobileApplyLink: function () {
            var e = uping.getUrlVars(), n = [], o = [], t, i, r, u, f, s;
            n.id = uping.defaultAffiliate;
            n.subid = uping.defaultSubAffiliate === null ? "" : uping.defaultSubAffiliate;
            n.campaign = uping.defaultCampaign === null ? "" : uping.defaultCampaign;
            t = jQuery.parseJSON(uping.readCookie());
            for (i in t) n[i] = t[i];
            for (r in e) n[r] = e[r];
            u = 0;
            for (f in n) o[u] = f + "=" + n[f], u++;
            return s = o.join("&"), "?" + s
        },
        getUrlVars: function () {
            var n = {}, t = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (t, i, r) {
                n[i] = r
            });
            return n
        },
        getVisitCookieName: function () {
            return uping.defaultAffiliate + "-visit"
        },
        createVisitCookie: function () {
            return document.cookie = uping.getVisitCookieName() + "=1;path=/"
        },
        createCookie: function (n) {
            var t = uping.readCookie(), u, i, r;
            t = t === null ? {} : jQuery.parseJSON(t);
            for (u in n) t[u] = n[u];
            i = JSON.stringify(t);
            uping.cookieExpiryTime < 1 || uping.cookieExpiryTime === undefined ? document.cookie = "AffPop=" + escape(i) + ";path=/" : (r = new Date, r.setTime(r.getTime() + uping.cookieExpiryTime * 36e5), document.cookie = "AffPop=" + escape(i) + ";expires=" + r.toGMTString() + ";path=/");
            uping.readCookie() || (document.cookie = "AffPop=" + escape(i))
        },
        readVisitCookie: function (n) {
            for (var t, r = n + "=", u = document.cookie.split(";"), i = 0; i < u.length; i++) {
                for (t = u[i]; t.charAt(0) === " ";) t = t.substring(1, t.length);
                if (t.indexOf(r) === 0) return unescape(t.substring(r.length, t.length))
            }
            return null
        },
        readCookie: function () {
            for (var n, i = "AffPop=", r = document.cookie.split(";"), t = 0; t < r.length; t++) {
                for (n = r[t]; n.charAt(0) === " ";) n = n.substring(1, n.length);
                if (n.indexOf(i) === 0) return unescape(n.substring(i.length, n.length))
            }
            return null
        },
        mobileliseLinkUrls: function () {
            var r = window.location.href.indexOf("apply") > -1 || window.location.href.indexOf("application") > -1,
                u = $("input#new-range").val(), f = $("input[name=loan-duration]:checked").val(), t, i, n;
            $("a.mobile-apply").length && (t = uping.buildMobileApplyLink(), i = "&", t.indexOf("?") === -1 && (i = "?"), n = uping.mobileFormSrc + t + i + "mobile=on&bannerurl=", console.log(uping.mobileFormSrc + t + i + "mobile=on&bannerurl="), uping.mobileBannerImage !== undefined && uping.mobileBannerImage !== null && (n = n + encodeURI(uping.mobileBannerImage) + "&la=" + u + "&term=" + f), $("a.mobile-apply").attr("href", n), $("a.mobile-apply").attr("rel") || $("a.mobile-apply").attr("rel", "nofollow"));
            r && (window.location.href = n)
        },
        configureIframe: function () {
            var n, t, i;
            $("iframe.applyForm").length && (n = uping.buildIframeApplyLink(), t = "", uping.detectMobile && (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) && (t = n === null || n === undefined || n.indexOf("?") < 0 ? "?mobile=on" : "&mobile=on"), i = uping.iframeSrc + n + t, $("iframe.applyForm").attr("src", i))
        }
    }, cookies;
$(function () {
    var n = uping.getUrlVars();
    n && (uping.createCookie(n), cookies = JSON.parse(uping.readCookie()), cookies && (uping.setAffiliateId(cookies.id), uping.setCampaign(cookies.campaign), uping.setSubAffiliate(cookies.subid)), console.log(cookies), console.log(uping.defaultAffiliate), console.log(uping.defaultCampaign), console.log(uping.defaultSubAffiliate));
    uping.defaultSiteAffiliate !== undefined && uping.defaultSiteAffiliate !== null && uping.defaultSiteAffiliate.length > 0 && uping.setAffiliateId(defaultSiteAffiliate);
    uping.defaultSiteCampaign !== undefined && uping.defaultSiteCampaign !== null && uping.defaultSiteCampaign.length > 0 && uping.setCampaign(defaultSiteCampaign);
    uping.defaultSiteSubAffiliate !== undefined && defaultSiteSubAffiliate !== null && uping.defaultSiteSubAffiliate.length > 0 && uping.setSubAffiliate(defaultSiteSubAffiliate)
});
document.addEventListener("DOMContentLoaded", function () {
    if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");
        var n = new IntersectionObserver(function (t) {
            t.forEach(function (t) {
                if (t.isIntersecting) {
                    var i = t.target;
                    i.src = i.dataset.src;
                    i.classList.remove("lazy");
                    n.unobserve(i)
                }
            })
        });
        lazyloadImages.forEach(function (t) {
            n.observe(t)
        })
    } else lazyloadImages = document.querySelectorAll(".lazy"), document.addEventListener("scroll", lazyload), window.addEventListener("resize", lazyload), window.addEventListener("orientationChange", lazyload)
});
document.addEventListener("DOMContentLoaded", function () {
    var t, i, r;
    if ("IntersectionObserver" in window) t = document.querySelectorAll(".lazycssimg"), i = new IntersectionObserver(function (n) {
        n.forEach(function (n) {
            if (n.isIntersecting && !isHidden(n.target)) {
                var t = n.target;
                t.classList.remove("lazycssimg");
                i.unobserve(t)
            }
        })
    }), t.forEach(function (n) {
        i.observe(n)
    }); else {
        t = document.querySelectorAll(".lazycssimg");

        function n() {
            r && clearTimeout(r);
            r = setTimeout(function () {
                var i = window.pageYOffset;
                t.forEach(function (n) {
                    n.offsetTop < window.innerHeight + i && (n.src = n.dataset.src, n.classList.remove("lazycssimg"))
                });
                t.length == 0 && (document.removeEventListener("scroll", n), window.removeEventListener("resize", n), window.removeEventListener("orientationChange", n))
            }, 20)
        }

        document.addEventListener("scroll", n);
        window.addEventListener("resize", n);
        window.addEventListener("orientationChange", n)
    }
});
!function () {
    "use strict";

    function n() {
        function h(n, t) {
            this.scrollLeft = n;
            this.scrollTop = t
        }

        function u(n) {
            if (null === n || "object" != typeof n || void 0 === n.behavior || "auto" === n.behavior || "instant" === n.behavior) return !0;
            if ("object" == typeof n && "smooth" === n.behavior) return !1;
            throw new TypeError("behavior member of ScrollOptions " + n.behavior + " is not a valid value for enumeration ScrollBehavior.");
        }

        function c(n, t) {
            return "Y" === t ? n.clientHeight + s < n.scrollHeight : "X" === t ? n.clientWidth + s < n.scrollWidth : void 0
        }

        function l(t, i) {
            var r = n.getComputedStyle(t, null)["overflow" + i];
            return "auto" === r || "scroll" === r
        }

        function a(t) {
            var i, r, u, e, f = (o() - t.startTime) / v;
            e = f = f > 1 ? 1 : f;
            i = .5 * (1 - Math.cos(Math.PI * e));
            r = t.startX + (t.x - t.startX) * i;
            u = t.startY + (t.y - t.startY) * i;
            t.method.call(t.scrollable, r, u);
            r === t.x && u === t.y || n.requestAnimationFrame(a.bind(n, t))
        }

        function f(i, u, f) {
            var e, s, c, l, v = o();
            i === t.body ? (e = n, s = n.scrollX || n.pageXOffset, c = n.scrollY || n.pageYOffset, l = r.scroll) : (e = i, s = i.scrollLeft, c = i.scrollTop, l = h);
            a({scrollable: e, method: l, startTime: v, startX: s, startY: c, x: u, y: f})
        }

        var n = window, t = document;
        if (!("scrollBehavior" in t.documentElement.style && !0 !== n.__forceSmoothScrollPolyfill__)) {
            var e, i = n.HTMLElement || n.Element, v = 468, r = {
                    scroll: n.scroll || n.scrollTo,
                    scrollBy: n.scrollBy,
                    elementScroll: i.prototype.scroll || h,
                    scrollIntoView: i.prototype.scrollIntoView
                }, o = n.performance && n.performance.now ? n.performance.now.bind(n.performance) : Date.now,
                s = (e = n.navigator.userAgent, new RegExp("MSIE |Trident/|Edge/").test(e) ? 1 : 0);
            n.scroll = n.scrollTo = function () {
                void 0 !== arguments[0] && (!0 !== u(arguments[0]) ? f.call(n, t.body, void 0 !== arguments[0].left ? ~~arguments[0].left : n.scrollX || n.pageXOffset, void 0 !== arguments[0].top ? ~~arguments[0].top : n.scrollY || n.pageYOffset) : r.scroll.call(n, void 0 !== arguments[0].left ? arguments[0].left : "object" != typeof arguments[0] ? arguments[0] : n.scrollX || n.pageXOffset, void 0 !== arguments[0].top ? arguments[0].top : void 0 !== arguments[1] ? arguments[1] : n.scrollY || n.pageYOffset))
            };
            n.scrollBy = function () {
                void 0 !== arguments[0] && (u(arguments[0]) ? r.scrollBy.call(n, void 0 !== arguments[0].left ? arguments[0].left : "object" != typeof arguments[0] ? arguments[0] : 0, void 0 !== arguments[0].top ? arguments[0].top : void 0 !== arguments[1] ? arguments[1] : 0) : f.call(n, t.body, ~~arguments[0].left + (n.scrollX || n.pageXOffset), ~~arguments[0].top + (n.scrollY || n.pageYOffset)))
            };
            i.prototype.scroll = i.prototype.scrollTo = function () {
                if (void 0 !== arguments[0]) if (!0 !== u(arguments[0])) {
                    var n = arguments[0].left, t = arguments[0].top;
                    f.call(this, this, void 0 === n ? this.scrollLeft : ~~n, void 0 === t ? this.scrollTop : ~~t)
                } else {
                    if ("number" == typeof arguments[0] && void 0 === arguments[1]) throw new SyntaxError("Value could not be converted");
                    r.elementScroll.call(this, void 0 !== arguments[0].left ? ~~arguments[0].left : "object" != typeof arguments[0] ? ~~arguments[0] : this.scrollLeft, void 0 !== arguments[0].top ? ~~arguments[0].top : void 0 !== arguments[1] ? ~~arguments[1] : this.scrollTop)
                }
            };
            i.prototype.scrollBy = function () {
                void 0 !== arguments[0] && (!0 !== u(arguments[0]) ? this.scroll({
                    left: ~~arguments[0].left + this.scrollLeft,
                    top: ~~arguments[0].top + this.scrollTop,
                    behavior: arguments[0].behavior
                }) : r.elementScroll.call(this, void 0 !== arguments[0].left ? ~~arguments[0].left + this.scrollLeft : ~~arguments[0] + this.scrollLeft, void 0 !== arguments[0].top ? ~~arguments[0].top + this.scrollTop : ~~arguments[1] + this.scrollTop))
            };
            i.prototype.scrollIntoView = function () {
                if (!0 !== u(arguments[0])) {
                    var i = function (n) {
                        for (; n !== t.body && !1 === (r = c(i = n, "Y") && l(i, "Y"), u = c(i, "X") && l(i, "X"), r || u);) n = n.parentNode || n.host;
                        var i, r, u;
                        return n
                    }(this), e = i.getBoundingClientRect(), o = this.getBoundingClientRect();
                    i !== t.body ? (f.call(this, i, i.scrollLeft + o.left - e.left, i.scrollTop + o.top - e.top), "fixed" !== n.getComputedStyle(i).position && n.scrollBy({
                        left: e.left,
                        top: e.top,
                        behavior: "smooth"
                    })) : n.scrollBy({left: o.left, top: o.top, behavior: "smooth"})
                } else r.scrollIntoView.call(this, void 0 === arguments[0] || arguments[0])
            }
        }
    }

    "object" == typeof exports && "undefined" != typeof module ? module.exports = {polyfill: n} : n()
}()
