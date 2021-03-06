<?php declare(strict_types=1);
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
use ${EXCEPTION};

#end

class ${NAME} extends ${EXCEPTION} {
#if (${EXCEPTION_MESSAGE})
    public function __construct() {
        parent::__construct('${EXCEPTION_MESSAGE}');
    }
#end
}