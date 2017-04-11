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
        })()
    };
})();