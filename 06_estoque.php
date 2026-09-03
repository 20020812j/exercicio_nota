<?php

$itens = [\"Teclado\", \"Mouse\", \"Monitor\", \"Cabo HDMI\", \"Headset\"];\n\necho \"Itens do estoque (sem Cabo HDMI):\\n\\n\";\n\nforeach ($itens as $item) {\n    if ($item === \"Cabo HDMI\") {\n        continue;\n    }\n    echo \"- \" . $item . \"\\n\";\n}\n\necho \"\\nArray original (completo):\\n\";\nvar_dump($itens);\n\necho \"\\nNote que Cabo HDMI continua no array!\\n\";\n\n?>"
