// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
Jsw.namespace('PleskExt.EmbedJs');

PleskExt.EmbedJs.init = function() {
    if ('undefined' == typeof console) {
        return;
    }

    console.log('Init of EmbedJs extension');
    console.log('Value of dynamic variable: ' + PleskExt.EmbedJs.Config.dynamicVar);
}
