var tata = (function (t) {
  function n(e) {
    if (r[e]) return r[e].exports;
    var o = (r[e] = { i: e, l: !1, exports: {} });
    return t[e].call(o.exports, o, o.exports, n), (o.l = !0), o.exports;
  }
  var r = {};
  return (
    (n.m = t),
    (n.c = r),
    (n.d = function (t, r, e) {
      n.o(t, r) ||
        Object.defineProperty(t, r, {
          configurable: !1,
          enumerable: !0,
          get: e,
        });
    }),
    (n.n = function (t) {
      var r =
        t && t.__esModule
          ? function () {
              return t.default;
            }
          : function () {
              return t;
            };
      return n.d(r, "a", r), r;
    }),
    (n.o = function (t, n) {
      return Object.prototype.hasOwnProperty.call(t, n);
    }),
    (n.p = ""),
    n((n.s = 0))
  );
})([
  function (t, n, r) {
    t.exports = r(1);
  },
  function (t, n, r) {
    "use strict";
    function e() {
      return "tata-" + Date.now();
    }
    function o() {
      switch (
        arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "tr"
      ) {
        case "tr":
          return "top-right";
        case "tm":
          return "top-mid";
        case "tl":
          return "top-left";
        case "mr":
          return "mid-right";
        case "mm":
          return "mid-mid";
        case "ml":
          return "mid-left";
        case "br":
          return "bottom-right";
        case "bm":
          return "bottom-mid";
        case "bl":
          return "bottom-left";
        default:
          return "top-right";
      }
    }
    function a() {
      switch (
        arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "text"
      ) {
        case "text":
          return "chat_bubble";
        case "log":
          return "textsms";
        case "info":
          return "forum";
        case "warn":
          return "info_outline";
        case "success":
          return "check";
        case "error":
          return "block";
        case "ask":
          return "help_outline";
        default:
          return "";
      }
    }
    function i() {
      var t =
          arguments.length > 0 && void 0 !== arguments[0]
            ? arguments[0]
            : "fade",
        n =
          arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "tr";
      if ("slide" === t)
        switch (n) {
          case "tr":
          case "mr":
          case "br":
            return "slide-right-in";
          case "tl":
          case "ml":
          case "bl":
            return "slide-left-in";
          case "tm":
            return "slide-top-in";
          case "bm":
            return "slide-bottom-in";
        }
      return "fade-in";
    }
    function s() {
      var t =
          arguments.length > 0 && void 0 !== arguments[0]
            ? arguments[0]
            : "fade",
        n =
          arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "tr";
      if ("slide" === t)
        switch (n) {
          case "tr":
          case "mr":
          case "br":
            return "slide-right-out";
          case "tl":
          case "ml":
          case "bl":
            return "slide-left-out";
          case "tm":
            return "slide-top-out";
          case "bm":
            return "slide-bottom-out";
        }
      return "fade-out";
    }
    function c(t) {
      t.target.classList.contains("tata-close") || this.opts.onClick.call(this);
    }
    function l(t) {
      var n = t.target;
      if (n.classList.contains("tata-close")) {
        var r = n.parentNode.getAttribute("id"),
          e = y.find(function (t) {
            return t.id === r;
          }),
          o = document.getElementById(r);
        o.classList.add(s(e.opts.animate, e.opts.position)),
          f(o),
          !!e.opts.onClose &&
            "function" == typeof e.opts.onClose &&
            e.opts.onClose.call(e);
      }
    }
    function f(t) {
      var n = setTimeout(function () {
        "function" == typeof t.remove
          ? t.remove()
          : document.body.removeChild(t),
          clearTimeout(n);
      }, 800);
    }
    function u(t, n, r) {
      var l = e(),
        u = a(r.type),
        d = o(r.position),
        p = i(r.animate, r.position),
        m = { title: t, text: n, opts: r, id: l },
        h = y.findIndex(function (t) {
          return t.id === l;
        }),
        g = 0 === h ? null : y[h - 1];
      y.push(m);
      var v =
        '\n  <div class="tata ' +
        r.type +
        " " +
        p +
        " " +
        d +
        '" id=' +
        l +
        '>\n    <i class="tata-icon material-icons">' +
        u +
        '</i>\n    <div class="tata-body">\n      <h4 class="tata-title">' +
        t +
        '</h4>\n      <p class="tata-text">' +
        n +
        "</p>\n    </div>\n    " +
        (r.closeBtn || r.holding
          ? '<button class="tata-close material-icons">clear</button>'
          : "") +
        "\n    " +
        (!r.holding && r.progress ? '<div class="tata-progress"></div>' : "") +
        "\n  </div>\n ";
      document.body.insertAdjacentHTML("beforeend", v),
        g &&
          g.opts.position === m.opts.position &&
          f(document.getElementById(g.id));
      var b = document.getElementById(l);
      if (
        (!!r.onClick &&
          "function" == typeof r.onClick &&
          b.addEventListener("click", c.bind(m), { capture: !0, once: !0 }),
        !r.holding && r.progress)
      ) {
        b.querySelector(".tata-progress").style.animation =
          r.duration / 1e3 + "s reduceWidth linear forwards";
        var x = setTimeout(function () {
          var t = y.findIndex(function (t) {
            return t === t;
          });
          y.splice(t, 1),
            b.classList.add(s(m.opts.animate, m.opts.position)),
            f(b),
            clearTimeout(x),
            !!m.opts.onClose &&
              "function" == typeof m.opts.onClose &&
              m.opts.onClose.call(m);
        }, r.duration);
      }
    }
    function d() {
      var t =
          arguments.length > 0 && void 0 !== arguments[0]
            ? arguments[0]
            : "你好",
        n =
          arguments.length > 1 && void 0 !== arguments[1]
            ? arguments[1]
            : "今天是" + new Date().toLocaleString(),
        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
      u(t, n, Object.assign({}, w, r, { type: "text" }));
    }
    function p() {
      var t =
          arguments.length > 0 && void 0 !== arguments[0]
            ? arguments[0]
            : "你好",
        n =
          arguments.length > 1 && void 0 !== arguments[1]
            ? arguments[1]
            : "今天是" + new Date().toLocaleString(),
        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
      u(t, n, Object.assign({}, w, r, { type: "log" }));
    }
    function m() {
      var t =
          arguments.length > 0 && void 0 !== arguments[0]
            ? arguments[0]
            : "你好",
        n =
          arguments.length > 1 && void 0 !== arguments[1]
            ? arguments[1]
            : "今天是" + new Date().toLocaleString(),
        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
      u(t, n, Object.assign({}, w, r, { type: "info" }));
    }
    function h() {
      var t =
          arguments.length > 0 && void 0 !== arguments[0]
            ? arguments[0]
            : "你好",
        n =
          arguments.length > 1 && void 0 !== arguments[1]
            ? arguments[1]
            : "今天是" + new Date().toLocaleString(),
        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
      u(t, n, Object.assign({}, w, r, { type: "warn" }));
    }
    function g() {
      var t =
          arguments.length > 0 && void 0 !== arguments[0]
            ? arguments[0]
            : "你好",
        n =
          arguments.length > 1 && void 0 !== arguments[1]
            ? arguments[1]
            : "今天是" + new Date().toLocaleString(),
        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
      u(t, n, Object.assign({}, w, r, { type: "error" }));
    }
    function v() {
      var t =
          arguments.length > 0 && void 0 !== arguments[0]
            ? arguments[0]
            : "你好",
        n =
          arguments.length > 1 && void 0 !== arguments[1]
            ? arguments[1]
            : "今天是" + new Date().toLocaleString(),
        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
      u(t, n, Object.assign({}, w, r, { type: "success" }));
    }
    function b() {
      var t = Object.assign({}, w, opts, { type: "ask" });
      u(title, d, t);
    }
    function x() {
      y.forEach(function (t) {
        return f(document.getElementById(t.id));
      }),
        (y.length = 0);
    }
    Object.defineProperty(n, "__esModule", { value: !0 }),
      (n.text = d),
      (n.log = p),
      (n.info = m),
      (n.warn = h),
      (n.error = g),
      (n.success = v),
      (n.ask = b),
      (n.clear = x),
      r(2),
      (function (t) {
        var n = document.createElement("link");
        (n.rel = "stylesheet"), (n.href = t), document.head.appendChild(n);
      })("https://fonts.googleapis.com/icon?family=Material+Icons"),
      document.addEventListener("click", l, !1);
    var y = [],
      w = {
        type: "log",
        position: "tr",
        animate: "fade",
        duration: 3e3,
        progress: !0,
        holding: !1,
        closeBtn: !0,
        onClick: null,
        onClose: null,
      };
  },
  function (t, n, r) {
    var e = r(3);
    "string" == typeof e && (e = [[t.i, e, ""]]);
    var o = { hmr: !0 };
    o.transform = void 0;
    r(5)(e, o);
    e.locals && (t.exports = e.locals);
  },
  function (t, n, r) {
    (n = t.exports = r(4)(void 0)),
      n.push([
        t.i,
        ".tata {\r\n  position: fixed;\r\n  display: flex;\r\n  justify-content: space-around;\r\n  align-items: center;\r\n  width: 300px;\r\n  border-radius: 3px;\r\n  color: #ffffff;\r\n  font-size: 16px;\r\n  z-index: 9999;\r\n  pointer-events: auto;\r\n  padding: 12px 14px 12px 20px;\r\n  box-shadow: 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12), 0 11px 15px -7px rgba(0, 0, 0, 0.2);\r\n}\r\n\r\n.tata:hover {\r\n  opacity: 1;\r\n}\r\n\r\n.tata * {\r\n  box-sizing: border-box;\r\n}\r\n\r\n.tata .tata-icon {\r\n  font-size: 2em;\r\n  color: inherit;\r\n}\r\n\r\n.tata .tata-body {\r\n  margin: 0;\r\n  padding: 0 14px;\r\n  min-height: 38px;\r\n  min-width: 260px;\r\n}\r\n\r\n.tata .tata-title {\r\n  margin: 0 0 2px 0;\r\n  font-size: 1em;\r\n}\r\n\r\n.tata .tata-text {\r\n  margin: 0;\r\n  font-size: .9em;\r\n}\r\n\r\n.tata .tata-close {\r\n  position: absolute;\r\n  top: 6px;\r\n  right: 6px;\r\n  border: none;\r\n  margin: 0;\r\n  padding: 0;\r\n  font-size: 1em;\r\n  font-weight: bold;\r\n  color: inherit;\r\n  cursor: pointer;\r\n  outline: none;\r\n  background: transparent;\r\n}\r\n\r\n.tata-progress {\r\n  position: absolute;\r\n  bottom: -1px;\r\n  left: 0;\r\n  width: 100%;\r\n  height: 5px;\r\n  border-radius: 0 0 3px 3px;\r\n  background: rgba(0, 0, 0, 0.2);\r\n}\r\n\r\n.tata .tata-close:hover {\r\n  opacity: 0.4;\r\n}\r\n\r\n.tata.top-right {\r\n  top: 12px;\r\n  right: 12px;\r\n}\r\n\r\n.tata.top-mid {\r\n  top: 12px;\r\n  left: 50%;\r\n  transform: translateX(-50%);\r\n}\r\n\r\n.tata.top-left {\r\n  top: 12px;\r\n  left: 12px;\r\n}\r\n\r\n.tata.bottom-right {\r\n  right: 12px;\r\n  bottom: 18px;\r\n}\r\n\r\n.tata.bottom-mid {\r\n  left: 50%;\r\n  bottom: 18px;\r\n  transform: translateX(-50%);\r\n}\r\n\r\n.tata.bottom-left {\r\n  bottom: 18px;\r\n  left: 12px;\r\n}\r\n\r\n.tata.mid-right {\r\n  top: 50%;\r\n  right: 12px;\r\n  transform: translateY(-50%);\r\n}\r\n\r\n.tata.mid-left {\r\n  top: 50%;\r\n  left: 12px;\r\n  transform: translateY(-50%);\r\n}\r\n\r\n.tata.mid-mid {\r\n  top: 35%;\r\n  left: 50%;\r\n  transform: translate(-50%, -50%);\r\n}\r\n\r\n.tata.text {\r\n  color: #fff;\r\n  background: #323232;\r\n}\r\n\r\n.tata.log {\r\n  color: #333333;\r\n  background: #fffffc;\r\n}\r\n\r\n.tata.info {\r\n  background: #2ca9e1;\r\n}\r\n\r\n.tata.warn {\r\n  background: #f89406;\r\n}\r\n\r\n.tata.error {\r\n  background : linear-gradient(90deg, #c1213e 0%, #d01f1f 100%); \r\n}\r\n\r\n.tata.success {\r\n  background: linear-gradient(90deg, #219988 0%, #218e99 100%); \r\n}\r\n\r\n.tata.fade-in {\r\n  animation: .4s ease-in fadeIn forwards;\r\n}\r\n\r\n.tata.fade-out {\r\n  animation: .4s linear fadeOut forwards;\r\n}\r\n\r\n.tata.slide-right-in {\r\n  animation: .4s ease slideRightIn forwards;\r\n}\r\n\r\n.tata.slide-right-out {\r\n  animation: .4s ease slideRightOut forwards;\r\n}\r\n\r\n.tata.slide-left-in {\r\n  animation: .4s ease slideLeftIn forwards;\r\n}\r\n\r\n.tata.slide-left-out {\r\n  animation: .4s ease slideLeftOut forwards;\r\n}\r\n\r\n.tata.slide-top-in {\r\n  animation: .4s ease slideTopIn forwards;\r\n}\r\n\r\n.tata.slide-top-out {\r\n  animation: .4s ease slideTopOut forwards;\r\n}\r\n\r\n.tata.slide-bottom-in {\r\n  animation: .4s ease slideBottomIn forwards;\r\n}\r\n\r\n.tata.slide-bottom-out {\r\n  animation: .4s ease slideBottomOut forwards;\r\n}\r\n\r\n@keyframes fadeIn {\r\n  from {\r\n    opacity: 0;\r\n  }\r\n\r\n  to {\r\n    opacity: 1;\r\n  }\r\n}\r\n\r\n@keyframes fadeOut {\r\n  from {\r\n    opacity: 1;\r\n  }\r\n\r\n  to {\r\n    opacity: 0;\r\n  }\r\n}\r\n\r\n@keyframes slideRightIn {\r\n  from {\r\n    right: -310px;\r\n  }\r\n\r\n  to {\r\n    right: 12px;\r\n  }\r\n}\r\n\r\n@keyframes slideRightOut {\r\n  from {\r\n    right: 12px;\r\n  }\r\n\r\n  to {\r\n    right: -310px;\r\n  }\r\n}\r\n\r\n@keyframes slideLeftIn {\r\n  from {\r\n    left: -310px;\r\n  }\r\n\r\n  to {\r\n    left: 12px;\r\n  }\r\n}\r\n\r\n@keyframes slideLeftOut {\r\n  from {\r\n    left: 12px;\r\n  }\r\n\r\n  to {\r\n    left: -310px;\r\n  }\r\n}\r\n\r\n@keyframes slideTopIn {\r\n  from {\r\n    top: calc(-100% + -12px);\r\n  }\r\n  to {\r\n    top: 12px;\r\n  }\r\n}\r\n\r\n@keyframes slideTopOut {\r\n  from {\r\n    top: 12px;\r\n  }\r\n  to {\r\n    top: calc(-100% + -12px);\r\n  }\r\n}\r\n\r\n@keyframes slideBottomIn {\r\n  from {\r\n    bottom: calc(-100% + -18px);\r\n  }\r\n  to {\r\n    bottom: 18px;\r\n  }\r\n}\r\n\r\n@keyframes slideBottomOut {\r\n  from {\r\n    bottom: 18px;\r\n  }\r\n  to {\r\n    bottom: calc(-100% + -18px);\r\n  }\r\n}\r\n\r\n@keyframes reduceWidth {\r\n  from {\r\n    width: 100%;\r\n  }\r\n\r\n  to {\r\n    width: 0%;\r\n  }\r\n}",
        "",
      ]);
  },
  function (t, n) {
    function r(t, n) {
      var r = t[1] || "",
        o = t[3];
      if (!o) return r;
      if (n && "function" == typeof btoa) {
        var a = e(o);
        return [r]
          .concat(
            o.sources.map(function (t) {
              return "/*# sourceURL=" + o.sourceRoot + t + " */";
            })
          )
          .concat([a])
          .join("\n");
      }
      return [r].join("\n");
    }
    function e(t) {
      return (
        "/*# sourceMappingURL=data:application/json;charset=utf-8;base64," +
        btoa(unescape(encodeURIComponent(JSON.stringify(t)))) +
        " */"
      );
    }
    t.exports = function (t) {
      var n = [];
      return (
        (n.toString = function () {
          return this.map(function (n) {
            var e = r(n, t);
            return n[2] ? "@media " + n[2] + "{" + e + "}" : e;
          }).join("");
        }),
        (n.i = function (t, r) {
          "string" == typeof t && (t = [[null, t, ""]]);
          for (var e = {}, o = 0; o < this.length; o++) {
            var a = this[o][0];
            "number" == typeof a && (e[a] = !0);
          }
          for (o = 0; o < t.length; o++) {
            var i = t[o];
            ("number" == typeof i[0] && e[i[0]]) ||
              (r && !i[2]
                ? (i[2] = r)
                : r && (i[2] = "(" + i[2] + ") and (" + r + ")"),
              n.push(i));
          }
        }),
        n
      );
    };
  },
  function (t, n, r) {
    function e(t, n) {
      for (var r = 0; r < t.length; r++) {
        var e = t[r],
          o = m[e.id];
        if (o) {
          o.refs++;
          for (var a = 0; a < o.parts.length; a++) o.parts[a](e.parts[a]);
          for (; a < e.parts.length; a++) o.parts.push(f(e.parts[a], n));
        } else {
          for (var i = [], a = 0; a < e.parts.length; a++)
            i.push(f(e.parts[a], n));
          m[e.id] = { id: e.id, refs: 1, parts: i };
        }
      }
    }
    function o(t, n) {
      for (var r = [], e = {}, o = 0; o < t.length; o++) {
        var a = t[o],
          i = n.base ? a[0] + n.base : a[0],
          s = a[1],
          c = a[2],
          l = a[3],
          f = { css: s, media: c, sourceMap: l };
        e[i] ? e[i].parts.push(f) : r.push((e[i] = { id: i, parts: [f] }));
      }
      return r;
    }
    function a(t, n) {
      var r = g(t.insertInto);
      if (!r)
        throw new Error(
          "Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid."
        );
      var e = x[x.length - 1];
      if ("top" === t.insertAt)
        e
          ? e.nextSibling
            ? r.insertBefore(n, e.nextSibling)
            : r.appendChild(n)
          : r.insertBefore(n, r.firstChild),
          x.push(n);
      else if ("bottom" === t.insertAt) r.appendChild(n);
      else {
        if ("object" != typeof t.insertAt || !t.insertAt.before)
          throw new Error(
            "[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n"
          );
        var o = g(t.insertInto + " " + t.insertAt.before);
        r.insertBefore(n, o);
      }
    }
    function i(t) {
      if (null === t.parentNode) return !1;
      t.parentNode.removeChild(t);
      var n = x.indexOf(t);
      n >= 0 && x.splice(n, 1);
    }
    function s(t) {
      var n = document.createElement("style");
      return (t.attrs.type = "text/css"), l(n, t.attrs), a(t, n), n;
    }
    function c(t) {
      var n = document.createElement("link");
      return (
        (t.attrs.type = "text/css"),
        (t.attrs.rel = "stylesheet"),
        l(n, t.attrs),
        a(t, n),
        n
      );
    }
    function l(t, n) {
      Object.keys(n).forEach(function (r) {
        t.setAttribute(r, n[r]);
      });
    }
    function f(t, n) {
      var r, e, o, a;
      if (n.transform && t.css) {
        if (!(a = n.transform(t.css))) return function () {};
        t.css = a;
      }
      if (n.singleton) {
        var l = b++;
        (r = v || (v = s(n))),
          (e = u.bind(null, r, l, !1)),
          (o = u.bind(null, r, l, !0));
      } else
        t.sourceMap &&
        "function" == typeof URL &&
        "function" == typeof URL.createObjectURL &&
        "function" == typeof URL.revokeObjectURL &&
        "function" == typeof Blob &&
        "function" == typeof btoa
          ? ((r = c(n)),
            (e = p.bind(null, r, n)),
            (o = function () {
              i(r), r.href && URL.revokeObjectURL(r.href);
            }))
          : ((r = s(n)),
            (e = d.bind(null, r)),
            (o = function () {
              i(r);
            }));
      return (
        e(t),
        function (n) {
          if (n) {
            if (
              n.css === t.css &&
              n.media === t.media &&
              n.sourceMap === t.sourceMap
            )
              return;
            e((t = n));
          } else o();
        }
      );
    }
    function u(t, n, r, e) {
      var o = r ? "" : e.css;
      if (t.styleSheet) t.styleSheet.cssText = w(n, o);
      else {
        var a = document.createTextNode(o),
          i = t.childNodes;
        i[n] && t.removeChild(i[n]),
          i.length ? t.insertBefore(a, i[n]) : t.appendChild(a);
      }
    }
    function d(t, n) {
      var r = n.css,
        e = n.media;
      if ((e && t.setAttribute("media", e), t.styleSheet))
        t.styleSheet.cssText = r;
      else {
        for (; t.firstChild; ) t.removeChild(t.firstChild);
        t.appendChild(document.createTextNode(r));
      }
    }
    function p(t, n, r) {
      var e = r.css,
        o = r.sourceMap,
        a = void 0 === n.convertToAbsoluteUrls && o;
      (n.convertToAbsoluteUrls || a) && (e = y(e)),
        o &&
          (e +=
            "\n/*# sourceMappingURL=data:application/json;base64," +
            btoa(unescape(encodeURIComponent(JSON.stringify(o)))) +
            " */");
      var i = new Blob([e], { type: "text/css" }),
        s = t.href;
      (t.href = URL.createObjectURL(i)), s && URL.revokeObjectURL(s);
    }
    var m = {},
      h = (function (t) {
        var n;
        return function () {
          return void 0 === n && (n = t.apply(this, arguments)), n;
        };
      })(function () {
        return window && document && document.all && !window.atob;
      }),
      g = (function (t) {
        var n = {};
        return function (r) {
          if (void 0 === n[r]) {
            var e = t.call(this, r);
            if (e instanceof window.HTMLIFrameElement)
              try {
                e = e.contentDocument.head;
              } catch (t) {
                e = null;
              }
            n[r] = e;
          }
          return n[r];
        };
      })(function (t) {
        return document.querySelector(t);
      }),
      v = null,
      b = 0,
      x = [],
      y = r(6);
    t.exports = function (t, n) {
      if ("undefined" != typeof DEBUG && DEBUG && "object" != typeof document)
        throw new Error(
          "The style-loader cannot be used in a non-browser environment"
        );
      (n = n || {}),
        (n.attrs = "object" == typeof n.attrs ? n.attrs : {}),
        n.singleton || (n.singleton = h()),
        n.insertInto || (n.insertInto = "head"),
        n.insertAt || (n.insertAt = "bottom");
      var r = o(t, n);
      return (
        e(r, n),
        function (t) {
          for (var a = [], i = 0; i < r.length; i++) {
            var s = r[i],
              c = m[s.id];
            c.refs--, a.push(c);
          }
          if (t) {
            e(o(t, n), n);
          }
          for (var i = 0; i < a.length; i++) {
            var c = a[i];
            if (0 === c.refs) {
              for (var l = 0; l < c.parts.length; l++) c.parts[l]();
              delete m[c.id];
            }
          }
        }
      );
    };
    var w = (function () {
      var t = [];
      return function (n, r) {
        return (t[n] = r), t.filter(Boolean).join("\n");
      };
    })();
  },
  function (t, n) {
    t.exports = function (t) {
      var n = "undefined" != typeof window && window.location;
      if (!n) throw new Error("fixUrls requires window.location");
      if (!t || "string" != typeof t) return t;
      var r = n.protocol + "//" + n.host,
        e = r + n.pathname.replace(/\/[^\/]*$/, "/");
      return t.replace(
        /url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi,
        function (t, n) {
          var o = n
            .trim()
            .replace(/^"(.*)"$/, function (t, n) {
              return n;
            })
            .replace(/^'(.*)'$/, function (t, n) {
              return n;
            });
          if (/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/)/i.test(o)) return t;
          var a;
          return (
            (a =
              0 === o.indexOf("//")
                ? o
                : 0 === o.indexOf("/")
                ? r + o
                : e + o.replace(/^\.\//, "")),
            "url(" + JSON.stringify(a) + ")"
          );
        }
      );
    };
  },
]);
