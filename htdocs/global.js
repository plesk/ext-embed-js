// Copyright 1999-2016. Parallels IP Holdings GmbH.
Jsw.namespace('PleskExt.EmbedJs');

PleskExt.EmbedJs.init = function() {
    if ('undefined' == typeof console) {
        return;
    }

    console.log('Init of EmbedJs extension');
    console.log('Value of dynamic variable: ' + PleskExt.EmbedJs.Config.dynamicVar);
}
