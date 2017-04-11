var Core = (function () {
    return {
        'formatString': (function() {
            var sliceFn = Array.prototype.slice,
                rxIndex = /{(\d+)}/g;

            var objectFn = function(str, args) {
                var a, rx;

                for (a in args) {
                    rx  = new RegExp('\\{' + a + '\\}', 'gi');
                    str = str.replace(rx, args[a]);
                }

                return str;
            },

            arrayFn = function(str, args) {
                var replaceFn = function(match, number) {
                    return args[number];
                };

                return str.replace(rxIndex, replaceFn);
            };

            return function() {

                var args = sliceFn.call(arguments, 0),
                    str  = args.shift();

                if ((typeof str !== 'string') || !str) {
                    return str;
                }

                return typeof args[0] === 'object'
                    ? objectFn(str, args[0])
                    : arrayFn(str, args);
            }
        })(),
        'urlQs': function (url, params, ignore) {
            var url       = url    || location.href,
                params    = params || {},
                ignore    = ignore || [],
                qs_params = {};

            if (location.href.indexOf('?') > -1) {
                [current_url, current_qs] = location.href.split('?');

                if (location.href.indexOf('&') > -1) {
                    var current_params    = current_qs.split('&');

                    for(var i = 0; i < current_params.length; i++) {
                        [name, value] = current_params[i].split('=');

                        if (ignore.indexOf(name) < 0 && value) {
                            qs_params[name] = value;
                        }
                    }
                }
            }

            if (Object.keys(params)) {
                for(var name in params) {
                    if (params[name]) {
                        qs_params[name] = params[name];
                    }
                }
            }

            params = [];

            for (var name in qs_params) {
                params.push(name + '=' + qs_params[name]);
            }

            qs = params.join('&');

            if (qs.length) {
                url += '?' + qs;
            }

            return url;
        }
    };
})();