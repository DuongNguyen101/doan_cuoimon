/*
 * International Telephone Input v12.1.6
 * https://github.com/jackocnr/intl-tel-input.git
 * Licensed under the MIT license
 */

!function(a) {
    "function" == typeof define && define.amd ? define(["jquery"], function(b) {
        a(b, window, document)
    }) : "object" == typeof module && module.exports ? module.exports = a(require("jquery"), window, document) : a(jQuery, window, document)
}(function(a, b, c, d) {
    "use strict";
    function e(b, c) {
        this.a = a(b),
        this.b = a.extend({}, h, c),
        this.ns = "." + f + g++,
        this.d = Boolean(b.setSelectionRange),
        this.e = Boolean(a(b).attr("placeholder"))
    }
    var f = "intlTelInput"
      , g = 1
      , h = {
        allowDropdown: !0,
        autoHideDialCode: !0,
        autoPlaceholder: "polite",
        customPlaceholder: null,
        dropdownContainer: "",
        excludeCountries: [],
        formatOnDisplay: !0,
        geoIpLookup: null,
        hiddenInput: "",
        initialCountry: "",
        nationalMode: !0,
        onlyCountries: [],
        placeholderNumberType: "MOBILE",
        preferredCountries: ["us", "gb"],
        separateDialCode: !1,
        utilsScript: ""
    }
      , i = {
        b: 38,
        c: 40,
        d: 13,
        e: 27,
        f: 43,
        A: 65,
        Z: 90,
        j: 32,
        k: 9
    }
      , j = ["800", "822", "833", "844", "855", "866", "877", "880", "881", "882", "883", "884", "885", "886", "887", "888", "889"];
    a(b).on("load", function() {
        a.fn[f].windowLoaded = !0
    }),
    e.prototype = {
        _a: function() {
            return this.b.nationalMode && (this.b.autoHideDialCode = !1),
            this.b.separateDialCode && (this.b.autoHideDialCode = this.b.nationalMode = !1),
            this.g = /Android.+Mobile|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            this.g && (a("body").addClass("iti-mobile"),
            this.b.dropdownContainer || (this.b.dropdownContainer = "body")),
            this.h = new a.Deferred,
            this.i = new a.Deferred,
            this.s = {},
            this._b(),
            this._f(),
            this._h(),
            this._i(),
            this._i2(),
            [this.h, this.i]
        },
        _b: function() {
            this._d(),
            this._d2(),
            this._e()
        },
        _c: function(a, b, c) {
            b in this.q || (this.q[b] = []);
            var d = c || 0;
            this.q[b][d] = a
        },
        _d: function() {
            if (this.b.onlyCountries.length) {
                var a = this.b.onlyCountries.map(function(a) {
                    return a.toLowerCase()
                });
                this.p = k.filter(function(b) {
                    return a.indexOf(b.iso2) > -1
                })
            } else if (this.b.excludeCountries.length) {
                var b = this.b.excludeCountries.map(function(a) {
                    return a.toLowerCase()
                });
                this.p = k.filter(function(a) {
                    return -1 === b.indexOf(a.iso2)
                })
            } else
                this.p = k
        },
        _d2: function() {
            this.q = {};
            for (var a = 0; a < this.p.length; a++) {
                var b = this.p[a];
                if (this._c(b.iso2, b.dialCode, b.priority),
                b.areaCodes)
                    for (var c = 0; c < b.areaCodes.length; c++)
                        this._c(b.iso2, b.dialCode + b.areaCodes[c])
            }
        },
        _e: function() {
            this.preferredCountries = [];
            for (var a = 0; a < this.b.preferredCountries.length; a++) {
                var b = this.b.preferredCountries[a].toLowerCase()
                  , c = this._y(b, !1, !0);
                c && this.preferredCountries.push(c)
            }
        },
        _f: function() {
            this.a.attr("autocomplete", "off");
            var b = "intl-tel-input";
            this.b.allowDropdown && (b += " allow-dropdown"),
            this.b.separateDialCode && (b += " separate-dial-code"),
            this.a.wrap(a("<div>", {
                "class": b
            })),
            this.k = a("<div>", {
                "class": "flag-container"
            }).insertBefore(this.a);
            var c = a("<div>", {
                "class": "selected-flag"
            });
            c.appendTo(this.k),
            this.l = a("<div>", {
                "class": "iti-flag"
            }).appendTo(c),
            this.b.separateDialCode && (this.t = a("<div>", {
                "class": "selected-dial-code"
            }).appendTo(c)),
            this.b.allowDropdown ? (c.attr("tabindex", "0"),
            a("<div>", {
                "class": "iti-arrow"
            }).appendTo(c),
            this.m = a("<ul>", {
                "class": "country-list hide"
            }),
            this.preferredCountries.length && (this._g(this.preferredCountries, "preferred"),
            a("<li>", {
                "class": "divider"
            }).appendTo(this.m)),
            this._g(this.p, ""),
            this.o = this.m.children(".country"),
            this.b.dropdownContainer ? this.dropdown = a("<div>", {
                "class": "intl-tel-input iti-container"
            }).append(this.m) : this.m.appendTo(this.k)) : this.o = a(),
            this.b.hiddenInput && (this.hiddenInput = a("<input>", {
                type: "hidden",
                name: this.b.hiddenInput
            }).insertBefore(this.a))
        },
        _g: function(a, b) {
            for (var c = "", d = 0; d < a.length; d++) {
                var e = a[d];
                c += "<li class='country " + b + "' data-dial-code='" + e.dialCode + "' data-country-code='" + e.iso2 + "'>",
                c += "<div class='flag-box'><div class='iti-flag " + e.iso2 + "'></div></div>",
                c += "<span class='country-name'>" + e.name + "</span>",
                c += "<span class='dial-code'>+" + e.dialCode + "</span>",
                c += "</li>"
            }
            this.m.append(c)
        },
        _h: function() {
            var a = this.a.val();
            this._af(a) && (!this._isRegionlessNanp(a) || this.b.nationalMode && !this.b.initialCountry) ? this._v(a) : "auto" !== this.b.initialCountry && (this.b.initialCountry ? this._z(this.b.initialCountry.toLowerCase()) : (this.j = this.preferredCountries.length ? this.preferredCountries[0].iso2 : this.p[0].iso2,
            a || this._z(this.j)),
            a || this.b.nationalMode || this.b.autoHideDialCode || this.b.separateDialCode || this.a.val("+" + this.s.dialCode)),
            a && this._u(a)
        },
        _i: function() {
            this._j(),
            this.b.autoHideDialCode && this._l(),
            this.b.allowDropdown && this._i1(),
            this.hiddenInput && this._initHiddenInputListener()
        },
        _initHiddenInputListener: function() {
            var a = this
              , b = this.a.closest("form");
            b.length && b.submit(function() {
                a.hiddenInput.val(a.getNumber())
            })
        },
        _i1: function() {
            var a = this
              , b = this.a.closest("label");
            b.length && b.on("click" + this.ns, function(b) {
                a.m.hasClass("hide") ? a.a.focus() : b.preventDefault()
            }),
            this.l.parent().on("click" + this.ns, function(b) {
                !a.m.hasClass("hide") || a.a.prop("disabled") || a.a.prop("readonly") || a._n()
            }),
            this.k.on("keydown" + a.ns, function(b) {
                !a.m.hasClass("hide") || b.which != i.b && b.which != i.c && b.which != i.j && b.which != i.d || (b.preventDefault(),
                b.stopPropagation(),
                a._n()),
                b.which == i.k && a._ac()
            })
        },
        _i2: function() {
            var c = this;
            this.b.utilsScript ? a.fn[f].windowLoaded ? a.fn[f].loadUtils(this.b.utilsScript, this.i) : a(b).on("load", function() {
                a.fn[f].loadUtils(c.b.utilsScript, c.i)
            }) : this.i.resolve(),
            "auto" === this.b.initialCountry ? this._i3() : this.h.resolve()
        },
        _i3: function() {
            a.fn[f].autoCountry ? this.handleAutoCountry() : a.fn[f].startedLoadingAutoCountry || (a.fn[f].startedLoadingAutoCountry = !0,
            "function" == typeof this.b.geoIpLookup && this.b.geoIpLookup(function(b) {
                a.fn[f].autoCountry = b.toLowerCase(),
                setTimeout(function() {
                    a(".intl-tel-input input").intlTelInput("handleAutoCountry")
                })
            }))
        },
        _j: function() {
            var a = this;
            this.a.on("keyup" + this.ns, function() {
                a._v(a.a.val()) && a._triggerCountryChange()
            }),
            this.a.on("cut" + this.ns + " paste" + this.ns, function() {
                setTimeout(function() {
                    a._v(a.a.val()) && a._triggerCountryChange()
                })
            })
        },
        _j2: function(a) {
            var b = this.a.attr("maxlength");
            return b && a.length > b ? a.substr(0, b) : a
        },
        _l: function() {
            var b = this;
            this.a.on("mousedown" + this.ns, function(a) {
                b.a.is(":focus") || b.a.val() || (a.preventDefault(),
                b.a.focus())
            }),
            this.a.on("focus" + this.ns, function(a) {
                b.a.val() || b.a.prop("readonly") || !b.s.dialCode || (b.a.val("+" + b.s.dialCode),
                b.a.one("keypress.plus" + b.ns, function(a) {
                    a.which == i.f && b.a.val("")
                }),
                setTimeout(function() {
                    var a = b.a[0];
                    if (b.d) {
                        var c = b.a.val().length;
                        a.setSelectionRange(c, c)
                    }
                }))
            });
            var c = this.a.prop("form");
            c && a(c).on("submit" + this.ns, function() {
                b._removeEmptyDialCode()
            }),
            this.a.on("blur" + this.ns, function() {
                b._removeEmptyDialCode()
            })
        },
        _removeEmptyDialCode: function() {
            var a = this.a.val();
            if ("+" == a.charAt(0)) {
                var b = this._m(a);
                b && this.s.dialCode != b || this.a.val("")
            }
            this.a.off("keypress.plus" + this.ns)
        },
        _m: function(a) {
            return a.replace(/\D/g, "")
        },
        _n: function() {
            this._o();
            var a = this.m.children(".active");
            a.length && (this._x(a),
            this._ad(a)),
            this._p(),
            this.l.children(".iti-arrow").addClass("up"),
            this.a.trigger("open:countrydropdown")
        },
        _o: function() {
            var c = this;
            if (this.b.dropdownContainer && this.dropdown.appendTo(this.b.dropdownContainer),
            this.n = this.m.removeClass("hide").outerHeight(),
            !this.g) {
                var d = this.a.offset()
                  , e = d.top
                  , f = a(b).scrollTop()
                  , g = e + this.a.outerHeight() + this.n < f + a(b).height()
                  , h = e - this.n > f;
                if (this.m.toggleClass("dropup", !g && h),
                this.b.dropdownContainer) {
                    var i = !g && h ? 0 : this.a.innerHeight();
                    this.dropdown.css({
                        top: e + i,
                        left: d.left
                    }),
                    a(b).on("scroll" + this.ns, function() {
                        c._ac()
                    })
                }
            }
        },
        _p: function() {
            var b = this;
            this.m.on("mouseover" + this.ns, ".country", function(c) {
                b._x(a(this))
            }),
            this.m.on("click" + this.ns, ".country", function(c) {
                b._ab(a(this))
            });
            var d = !0;
            a("html").on("click" + this.ns, function(a) {
                d || b._ac(),
                d = !1
            });
            var e = ""
              , f = null;
            a(c).on("keydown" + this.ns, function(a) {
                a.preventDefault(),
                a.which == i.b || a.which == i.c ? b._q(a.which) : a.which == i.d ? b._r() : a.which == i.e ? b._ac() : (a.which >= i.A && a.which <= i.Z || a.which == i.j) && (f && clearTimeout(f),
                e += String.fromCharCode(a.which),
                b._s(e),
                f = setTimeout(function() {
                    e = ""
                }, 1e3))
            })
        },
        _q: function(a) {
            var b = this.m.children(".highlight").first()
              , c = a == i.b ? b.prev() : b.next();
            c.length && (c.hasClass("divider") && (c = a == i.b ? c.prev() : c.next()),
            this._x(c),
            this._ad(c))
        },
        _r: function() {
            var a = this.m.children(".highlight").first();
            a.length && this._ab(a)
        },
        _s: function(a) {
            for (var b = 0; b < this.p.length; b++)
                if (this._t(this.p[b].name, a)) {
                    var c = this.m.children("[data-country-code=" + this.p[b].iso2 + "]").not(".preferred");
                    this._x(c),
                    this._ad(c, !0);
                    break
                }
        },
        _t: function(a, b) {
            return a.substr(0, b.length).toUpperCase() == b
        },
        _u: function(a) {
            if (this.b.formatOnDisplay && b.intlTelInputUtils && this.s) {
                var c = this.b.separateDialCode || !this.b.nationalMode && "+" == a.charAt(0) ? intlTelInputUtils.numberFormat.INTERNATIONAL : intlTelInputUtils.numberFormat.NATIONAL;
                a = intlTelInputUtils.formatNumber(a, this.s.iso2, c)
            }
            a = this._ah(a),
            this.a.val(a)
        },
        _v: function(b) {
            b && this.b.nationalMode && "1" == this.s.dialCode && "+" != b.charAt(0) && ("1" != b.charAt(0) && (b = "1" + b),
            b = "+" + b);
            var c = this._af(b)
              , d = null
              , e = this._m(b);
            if (c) {
                var f = this.q[this._m(c)]
                  , g = a.inArray(this.s.iso2, f) > -1
                  , h = "+1" == c && e.length >= 4;
                if ((!("1" == this.s.dialCode) || !this._isRegionlessNanp(e)) && (!g || h))
                    for (var i = 0; i < f.length; i++)
                        if (f[i]) {
                            d = f[i];
                            break
                        }
            } else
                "+" == b.charAt(0) && e.length ? d = "" : b && "+" != b || (d = this.j);
            return null !== d && this._z(d)
        },
        _isRegionlessNanp: function(b) {
            var c = this._m(b);
            if ("1" == c.charAt(0)) {
                var d = c.substr(1, 3);
                return a.inArray(d, j) > -1
            }
            return !1
        },
        _x: function(a) {
            this.o.removeClass("highlight"),
            a.addClass("highlight")
        },
        _y: function(a, b, c) {
            for (var d = b ? k : this.p, e = 0; e < d.length; e++)
                if (d[e].iso2 == a)
                    return d[e];
            if (c)
                return null;
            throw new Error("No country data for '" + a + "'")
        },
        _z: function(a) {
            var b = this.s.iso2 ? this.s : {};
            this.s = a ? this._y(a, !1, !1) : {},
            this.s.iso2 && (this.j = this.s.iso2),
            this.l.attr("class", "iti-flag " + a);
            var c = a ? this.s.name + ": +" + this.s.dialCode : "Unknown";
            if (this.l.parent().attr("title", c),
            this.b.separateDialCode) {
                var d = this.s.dialCode ? "+" + this.s.dialCode : ""
                  , e = this.a.parent();
                b.dialCode && e.removeClass("iti-sdc-" + (b.dialCode.length + 1)),
                d && e.addClass("iti-sdc-" + d.length),
                this.t.text(d)
            }
            return this._aa(),
            this.o.removeClass("active"),
            a && this.o.find(".iti-flag." + a).first().closest(".country").addClass("active"),
            b.iso2 !== a
        },
        _aa: function() {
            var a = "aggressive" === this.b.autoPlaceholder || !this.e && (!0 === this.b.autoPlaceholder || "polite" === this.b.autoPlaceholder);
            if (b.intlTelInputUtils && a) {
                var c = intlTelInputUtils.numberType[this.b.placeholderNumberType]
                  , d = this.s.iso2 ? intlTelInputUtils.getExampleNumber(this.s.iso2, this.b.nationalMode, c) : "";
                d = this._ah(d),
                "function" == typeof this.b.customPlaceholder && (d = this.b.customPlaceholder(d, this.s)),
                this.a.attr("placeholder", d)
            }
        },
        _ab: function(a) {
            var b = this._z(a.attr("data-country-code"));
            if (this._ac(),
            this._ae(a.attr("data-dial-code"), !0),
            this.a.focus(),
            this.d) {
                var c = this.a.val().length;
                this.a[0].setSelectionRange(c, c)
            }
            b && this._triggerCountryChange()
        },
        _ac: function() {
            this.m.addClass("hide"),
            this.l.children(".iti-arrow").removeClass("up"),
            a(c).off(this.ns),
            a("html").off(this.ns),
            this.m.off(this.ns),
            this.b.dropdownContainer && (this.g || a(b).off("scroll" + this.ns),
            this.dropdown.detach()),
            this.a.trigger("close:countrydropdown")
        },
        _ad: function(a, b) {
            var c = this.m
              , d = c.height()
              , e = c.offset().top
              , f = e + d
              , g = a.outerHeight()
              , h = a.offset().top
              , i = h + g
              , j = h - e + c.scrollTop()
              , k = d / 2 - g / 2;
            if (h < e)
                b && (j -= k),
                c.scrollTop(j);
            else if (i > f) {
                b && (j += k);
                var l = d - g;
                c.scrollTop(j - l)
            }
        },
        _ae: function(a, b) {
            var c, d = this.a.val();
            if (a = "+" + a,
            "+" == d.charAt(0)) {
                var e = this._af(d);
                c = e ? d.replace(e, a) : a
            } else {
                if (this.b.nationalMode || this.b.separateDialCode)
                    return;
                if (d)
                    c = a + d;
                else {
                    if (!b && this.b.autoHideDialCode)
                        return;
                    c = a
                }
            }
            this.a.val(c)
        },
        _af: function(b) {
            var c = "";
            if ("+" == b.charAt(0))
                for (var d = "", e = 0; e < b.length; e++) {
                    var f = b.charAt(e);
                    if (a.isNumeric(f) && (d += f,
                    this.q[d] && (c = b.substr(0, e + 1)),
                    4 == d.length))
                        break
                }
            return c
        },
        _ag: function() {
            var b = a.trim(this.a.val())
              , c = this.s.dialCode
              , d = this._m(b)
              , e = "1" == d.charAt(0) ? d : "1" + d;
            return (this.b.separateDialCode ? "+" + c : "+" != b.charAt(0) && "1" != b.charAt(0) && c && "1" == c.charAt(0) && 4 == c.length && c != e.substr(0, 4) ? c.substr(1) : "") + b
        },
        _ah: function(a) {
            if (this.b.separateDialCode) {
                var b = this._af(a);
                if (b) {
                    null !== this.s.areaCodes && (b = "+" + this.s.dialCode);
                    var c = " " === a[b.length] || "-" === a[b.length] ? b.length + 1 : b.length;
                    a = a.substr(c)
                }
            }
            return this._j2(a)
        },
        _triggerCountryChange: function() {
            this.a.trigger("countrychange", this.s)
        },
        handleAutoCountry: function() {
            "auto" === this.b.initialCountry && (this.j = a.fn[f].autoCountry,
            this.a.val() || this.setCountry(this.j),
            this.h.resolve())
        },
        handleUtils: function() {
            b.intlTelInputUtils && (this.a.val() && this._u(this.a.val()),
            this._aa()),
            this.i.resolve()
        },
        destroy: function() {
            if (this.allowDropdown && (this._ac(),
            this.l.parent().off(this.ns),
            this.a.closest("label").off(this.ns)),
            this.b.autoHideDialCode) {
                var b = this.a.prop("form");
                b && a(b).off(this.ns)
            }
            this.a.off(this.ns),
            this.a.parent().before(this.a).remove()
        },
        getExtension: function() {
            return b.intlTelInputUtils ? intlTelInputUtils.getExtension(this._ag(), this.s.iso2) : ""
        },
        getNumber: function(a) {
            return b.intlTelInputUtils ? intlTelInputUtils.formatNumber(this._ag(), this.s.iso2, a) : ""
        },
        getNumberType: function() {
            return b.intlTelInputUtils ? intlTelInputUtils.getNumberType(this._ag(), this.s.iso2) : -99
        },
        getSelectedCountryData: function() {
            return this.s
        },
        getValidationError: function() {
            return b.intlTelInputUtils ? intlTelInputUtils.getValidationError(this._ag(), this.s.iso2) : -99
        },
        isValidNumber: function() {
            var c = a.trim(this._ag())
              , d = this.b.nationalMode ? this.s.iso2 : "";
            return b.intlTelInputUtils ? intlTelInputUtils.isValidNumber(c, d) : null
        },
        setCountry: function(a) {
            a = a.toLowerCase(),
            this.l.hasClass(a) || (this._z(a),
            this._ae(this.s.dialCode, !1),
            this._triggerCountryChange())
        },
        setNumber: function(a) {
            var b = this._v(a);
            this._u(a),
            b && this._triggerCountryChange()
        },
        setPlaceholderNumberType: function(a) {
            this.b.placeholderNumberType = a,
            this._aa()
        }
    },
    a.fn[f] = function(b) {
        var c = arguments;
        if (b === d || "object" == typeof b) {
            var g = [];
            return this.each(function() {
                if (!a.data(this, "plugin_" + f)) {
                    var c = new e(this,b)
                      , d = c._a();
                    g.push(d[0]),
                    g.push(d[1]),
                    a.data(this, "plugin_" + f, c)
                }
            }),
            a.when.apply(null, g)
        }
        if ("string" == typeof b && "_" !== b[0]) {
            var h;
            return this.each(function() {
                var d = a.data(this, "plugin_" + f);
                d instanceof e && "function" == typeof d[b] && (h = d[b].apply(d, Array.prototype.slice.call(c, 1))),
                "destroy" === b && a.data(this, "plugin_" + f, null)
            }),
            h !== d ? h : this
        }
    }
    ,
    a.fn[f].getCountryData = function() {
        return k
    }
    ,
    a.fn[f].loadUtils = function(b, c) {
        a.fn[f].loadedUtilsScript ? c && c.resolve() : (a.fn[f].loadedUtilsScript = !0,
        a.ajax({
            type: "GET",
            url: b,
            complete: function() {
                a(".intl-tel-input input").intlTelInput("handleUtils")
            },
            dataType: "script",
            cache: !0
        }))
    }
    ,
    a.fn[f].defaults = h,
    a.fn[f].version = "12.1.6";
    for (var k = [["Afghanistan (‫افغانستان‬‎)", "af", "93"], ["Albania (Shqipëri)", "al", "355"], ["Algeria (‫الجزائر‬‎)", "dz", "213"], ["American Samoa", "as", "1684"], ["Andorra", "ad", "376"], ["Angola", "ao", "244"], ["Anguilla", "ai", "1264"], ["Antigua and Barbuda", "ag", "1268"], ["Argentina", "ar", "54"], ["Armenia (Հայաստան)", "am", "374"], ["Aruba", "aw", "297"], ["Australia", "au", "61", 0], ["Austria (Österreich)", "at", "43"], ["Azerbaijan (Azərbaycan)", "az", "994"], ["Bahamas", "bs", "1242"], ["Bahrain (‫البحرين‬‎)", "bh", "973"], ["Bangladesh (বাংলাদেশ)", "bd", "880"], ["Barbados", "bb", "1246"], ["Belarus (Беларусь)", "by", "375"], ["Belgium (België)", "be", "32"], ["Belize", "bz", "501"], ["Benin (Bénin)", "bj", "229"], ["Bermuda", "bm", "1441"], ["Bhutan (འབྲུག)", "bt", "975"], ["Bolivia", "bo", "591"], ["Bosnia and Herzegovina (Босна и Херцеговина)", "ba", "387"], ["Botswana", "bw", "267"], ["Brazil (Brasil)", "br", "55"], ["British Indian Ocean Territory", "io", "246"], ["British Virgin Islands", "vg", "1284"], ["Brunei", "bn", "673"], ["Bulgaria (България)", "bg", "359"], ["Burkina Faso", "bf", "226"], ["Burundi (Uburundi)", "bi", "257"], ["Cambodia (កម្ពុជា)", "kh", "855"], ["Cameroon (Cameroun)", "cm", "237"], ["Canada", "ca", "1", 1, ["204", "226", "236", "249", "250", "289", "306", "343", "365", "387", "403", "416", "418", "431", "437", "438", "450", "506", "514", "519", "548", "579", "581", "587", "604", "613", "639", "647", "672", "705", "709", "742", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905"]], ["Cape Verde (Kabu Verdi)", "cv", "238"], ["Caribbean Netherlands", "bq", "599", 1], ["Cayman Islands", "ky", "1345"], ["Central African Republic (République centrafricaine)", "cf", "236"], ["Chad (Tchad)", "td", "235"], ["Chile", "cl", "56"], ["China (中国)", "cn", "86"], ["Christmas Island", "cx", "61", 2], ["Cocos (Keeling) Islands", "cc", "61", 1], ["Colombia", "co", "57"], ["Comoros (‫جزر القمر‬‎)", "km", "269"], ["Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)", "cd", "243"], ["Congo (Republic) (Congo-Brazzaville)", "cg", "242"], ["Cook Islands", "ck", "682"], ["Costa Rica", "cr", "506"], ["Côte d’Ivoire", "ci", "225"], ["Croatia (Hrvatska)", "hr", "385"], ["Cuba", "cu", "53"], ["Curaçao", "cw", "599", 0], ["Cyprus (Κύπρος)", "cy", "357"], ["Czech Republic (Česká republika)", "cz", "420"], ["Denmark (Danmark)", "dk", "45"], ["Djibouti", "dj", "253"], ["Dominica", "dm", "1767"], ["Dominican Republic (República Dominicana)", "do", "1", 2, ["809", "829", "849"]], ["Ecuador", "ec", "593"], ["Egypt (‫مصر‬‎)", "eg", "20"], ["El Salvador", "sv", "503"], ["Equatorial Guinea (Guinea Ecuatorial)", "gq", "240"], ["Eritrea", "er", "291"], ["Estonia (Eesti)", "ee", "372"], ["Ethiopia", "et", "251"], ["Falkland Islands (Islas Malvinas)", "fk", "500"], ["Faroe Islands (Føroyar)", "fo", "298"], ["Fiji", "fj", "679"], ["Finland (Suomi)", "fi", "358", 0], ["France", "fr", "33"], ["French Guiana (Guyane française)", "gf", "594"], ["French Polynesia (Polynésie française)", "pf", "689"], ["Gabon", "ga", "241"], ["Gambia", "gm", "220"], ["Georgia (საქართველო)", "ge", "995"], ["Germany (Deutschland)", "de", "49"], ["Ghana (Gaana)", "gh", "233"], ["Gibraltar", "gi", "350"], ["Greece (Ελλάδα)", "gr", "30"], ["Greenland (Kalaallit Nunaat)", "gl", "299"], ["Grenada", "gd", "1473"], ["Guadeloupe", "gp", "590", 0], ["Guam", "gu", "1671"], ["Guatemala", "gt", "502"], ["Guernsey", "gg", "44", 1], ["Guinea (Guinée)", "gn", "224"], ["Guinea-Bissau (Guiné Bissau)", "gw", "245"], ["Guyana", "gy", "592"], ["Haiti", "ht", "509"], ["Honduras", "hn", "504"], ["Hong Kong (香港)", "hk", "852"], ["Hungary (Magyarország)", "hu", "36"], ["Iceland (Ísland)", "is", "354"], ["India (भारत)", "in", "91"], ["Indonesia", "id", "62"], ["Iran (‫ایران‬‎)", "ir", "98"], ["Iraq (‫العراق‬‎)", "iq", "964"], ["Ireland", "ie", "353"], ["Isle of Man", "im", "44", 2], ["Israel (‫ישראל‬‎)", "il", "972"], ["Italy (Italia)", "it", "39", 0], ["Jamaica", "jm", "1876"], ["Japan (日本)", "jp", "81"], ["Jersey", "je", "44", 3], ["Jordan (‫الأردن‬‎)", "jo", "962"], ["Kazakhstan (Казахстан)", "kz", "7", 1], ["Kenya", "ke", "254"], ["Kiribati", "ki", "686"], ["Kosovo", "xk", "383"], ["Kuwait (‫الكويت‬‎)", "kw", "965"], ["Kyrgyzstan (Кыргызстан)", "kg", "996"], ["Laos (ລາວ)", "la", "856"], ["Latvia (Latvija)", "lv", "371"], ["Lebanon (‫لبنان‬‎)", "lb", "961"], ["Lesotho", "ls", "266"], ["Liberia", "lr", "231"], ["Libya (‫ليبيا‬‎)", "ly", "218"], ["Liechtenstein", "li", "423"], ["Lithuania (Lietuva)", "lt", "370"], ["Luxembourg", "lu", "352"], ["Macau (澳門)", "mo", "853"], ["Macedonia (FYROM) (Македонија)", "mk", "389"], ["Madagascar (Madagasikara)", "mg", "261"], ["Malawi", "mw", "265"], ["Malaysia", "my", "60"], ["Maldives", "mv", "960"], ["Mali", "ml", "223"], ["Malta", "mt", "356"], ["Marshall Islands", "mh", "692"], ["Martinique", "mq", "596"], ["Mauritania (‫موريتانيا‬‎)", "mr", "222"], ["Mauritius (Moris)", "mu", "230"], ["Mayotte", "yt", "262", 1], ["Mexico (México)", "mx", "52"], ["Micronesia", "fm", "691"], ["Moldova (Republica Moldova)", "md", "373"], ["Monaco", "mc", "377"], ["Mongolia (Монгол)", "mn", "976"], ["Montenegro (Crna Gora)", "me", "382"], ["Montserrat", "ms", "1664"], ["Morocco (‫المغرب‬‎)", "ma", "212", 0], ["Mozambique (Moçambique)", "mz", "258"], ["Myanmar (Burma) (မြန်မာ)", "mm", "95"], ["Namibia (Namibië)", "na", "264"], ["Nauru", "nr", "674"], ["Nepal (नेपाल)", "np", "977"], ["Netherlands (Nederland)", "nl", "31"], ["New Caledonia (Nouvelle-Calédonie)", "nc", "687"], ["New Zealand", "nz", "64"], ["Nicaragua", "ni", "505"], ["Niger (Nijar)", "ne", "227"], ["Nigeria", "ng", "234"], ["Niue", "nu", "683"], ["Norfolk Island", "nf", "672"], ["North Korea (조선 민주주의 인민 공화국)", "kp", "850"], ["Northern Mariana Islands", "mp", "1670"], ["Norway (Norge)", "no", "47", 0], ["Oman (‫عُمان‬‎)", "om", "968"], ["Pakistan (‫پاکستان‬‎)", "pk", "92"], ["Palau", "pw", "680"], ["Palestine (‫فلسطين‬‎)", "ps", "970"], ["Panama (Panamá)", "pa", "507"], ["Papua New Guinea", "pg", "675"], ["Paraguay", "py", "595"], ["Peru (Perú)", "pe", "51"], ["Philippines", "ph", "63"], ["Poland (Polska)", "pl", "48"], ["Portugal", "pt", "351"], ["Puerto Rico", "pr", "1", 3, ["787", "939"]], ["Qatar (‫قطر‬‎)", "qa", "974"], ["Réunion (La Réunion)", "re", "262", 0], ["Romania (România)", "ro", "40"], ["Russia (Россия)", "ru", "7", 0], ["Rwanda", "rw", "250"], ["Saint Barthélemy", "bl", "590", 1], ["Saint Helena", "sh", "290"], ["Saint Kitts and Nevis", "kn", "1869"], ["Saint Lucia", "lc", "1758"], ["Saint Martin (Saint-Martin (partie française))", "mf", "590", 2], ["Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)", "pm", "508"], ["Saint Vincent and the Grenadines", "vc", "1784"], ["Samoa", "ws", "685"], ["San Marino", "sm", "378"], ["São Tomé and Príncipe (São Tomé e Príncipe)", "st", "239"], ["Saudi Arabia (‫المملكة العربية السعودية‬‎)", "sa", "966"], ["Senegal (Sénégal)", "sn", "221"], ["Serbia (Србија)", "rs", "381"], ["Seychelles", "sc", "248"], ["Sierra Leone", "sl", "232"], ["Singapore", "sg", "65"], ["Sint Maarten", "sx", "1721"], ["Slovakia (Slovensko)", "sk", "421"], ["Slovenia (Slovenija)", "si", "386"], ["Solomon Islands", "sb", "677"], ["Somalia (Soomaaliya)", "so", "252"], ["South Africa", "za", "27"], ["South Korea (대한민국)", "kr", "82"], ["South Sudan (‫جنوب السودان‬‎)", "ss", "211"], ["Spain (España)", "es", "34"], ["Sri Lanka (ශ්‍රී ලංකාව)", "lk", "94"], ["Sudan (‫السودان‬‎)", "sd", "249"], ["Suriname", "sr", "597"], ["Svalbard and Jan Mayen", "sj", "47", 1], ["Swaziland", "sz", "268"], ["Sweden (Sverige)", "se", "46"], ["Switzerland (Schweiz)", "ch", "41"], ["Syria (‫سوريا‬‎)", "sy", "963"], ["Taiwan (台灣)", "tw", "886"], ["Tajikistan", "tj", "992"], ["Tanzania", "tz", "255"], ["Thailand (ไทย)", "th", "66"], ["Timor-Leste", "tl", "670"], ["Togo", "tg", "228"], ["Tokelau", "tk", "690"], ["Tonga", "to", "676"], ["Trinidad and Tobago", "tt", "1868"], ["Tunisia (‫تونس‬‎)", "tn", "216"], ["Turkey (Türkiye)", "tr", "90"], ["Turkmenistan", "tm", "993"], ["Turks and Caicos Islands", "tc", "1649"], ["Tuvalu", "tv", "688"], ["U.S. Virgin Islands", "vi", "1340"], ["Uganda", "ug", "256"], ["Ukraine (Україна)", "ua", "380"], ["United Arab Emirates (‫الإمارات العربية المتحدة‬‎)", "ae", "971"], ["United Kingdom", "gb", "44", 0], ["United States", "us", "1", 0], ["Uruguay", "uy", "598"], ["Uzbekistan (Oʻzbekiston)", "uz", "998"], ["Vanuatu", "vu", "678"], ["Vatican City (Città del Vaticano)", "va", "39", 1], ["Venezuela", "ve", "58"], ["Vietnam (Việt Nam)", "vn", "84"], ["Wallis and Futuna (Wallis-et-Futuna)", "wf", "681"], ["Western Sahara (‫الصحراء الغربية‬‎)", "eh", "212", 1], ["Yemen (‫اليمن‬‎)", "ye", "967"], ["Zambia", "zm", "260"], ["Zimbabwe", "zw", "263"], ["Åland Islands", "ax", "358", 1]], l = 0; l < k.length; l++) {
        var m = k[l];
        k[l] = {
            name: m[0],
            iso2: m[1],
            dialCode: m[2],
            priority: m[3] || 0,
            areaCodes: m[4] || null
        }
    }
});
