(function () {
    function initErrorLogger() {
        // var serverUrl = 'https://pt-coreservice.pingyo.com:9467/api/system/clienterror';
        if (typeof serverUrl !== 'string' || !serverUrl.length) {
            throw new Error('passed argument must be a valid url sting');
        }

        var _errorsBuffer = [];
        var _timeout = null;

        var _sendByXhr = function (data) {
            var _xhr = new XMLHttpRequest();
            var _errorData = JSON.stringify(data);

            _xhr.open('index5e6a.html', serverUrl, true);
            _xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
            _xhr.onerror = function () { console.error('Error logging request failed') };
            _xhr.send(_errorData);

            console.log("el sent");
        };

        var _filterErrors = function (errorsData) {
            console.log("el raised");

            var _filterResult = [];
            while (errorsData.length) {
                var _err = errorsData.pop();
                var _isDuplicate = !!_filterResult.find(function (result) {
                    return result.source === _err.source
                        && result.lineNumber === _err.lineNumber
                        && result.columnNumber === _err.columnNumber
                });
                if (!_isDuplicate) {
                    console.log("el captured");
                    _filterResult.push(_err);
                }
            }
            return _filterResult;
        };

        var _addErrorToBuffer = function (message, file, lineNumber, colNumber, error) {
            _errorsBuffer.push({
                level: 4,
                message: message,
                source: file,
                error: String(error),
                lineNumber: String(lineNumber),
                columnNumber: String(colNumber),
                url: window.location.href
            });

            if (!_timeout) {
                _timeout = setTimeout(function () {
                    var _filteredErrors = _filterErrors(_errorsBuffer);
                    while (_filteredErrors.length) {
                        _sendByXhr(_filteredErrors.pop());
                    }
                    _timeout = null;
                }, 2000);
            }
        };

        window.onerror = _addErrorToBuffer;

        return {
            logError: _addErrorToBuffer,
        };
    }

    if (typeof module === 'object' && module.exports) {
        module.exports = initErrorLogger;
    } else if (typeof define === 'function' && define.amd) {
        define('error-logger', [], function (errorLogger) {
            return errorLogger;
        });
    } else {
        window.initErrorLogger = initErrorLogger;
    }

    window.initErrorLogger();
})();
