<?php

return [

    'does_not_exist' => '상태 꼬리표가 존재하지 않습니다.',
    'assoc_assets'	 => '이 상태 꼬리표는 하나 이상의 자산과 연결되어 있어서 삭제할 수 없습니다. 이 상태를 참조하지 않게 자산을 수정하고 다시 시도해 주세요. ',

    'create' => [
        'error'   => '상태 꼬리표가 생성되지 않았습니다. 다시 시도해 주세요.',
        'success' => '상태 꼬리표가 생성되었습니다.',
    ],

    'update' => [
        'error'   => '상태 꼬리표가 수정되지 않았습니다. 다시 시도해 주세요.',
        'success' => '상태 꼬리표가 수정되었습니다.',
    ],

    'delete' => [
        'confirm'   => '이 상태 꼬리표를 삭제하시겠습니까?',
        'error'   => '상태 꼬리표 삭제시 문제가 발생했습니다. 다시 시도해 주세요.',
        'success' => '상태 꼬리표가 삭제되었습니다.',
    ],

    'help' => [
        'undeployable'   => '이러한 자산은 누구에게도 할당 할 수 없습니다.',
        'deployable'   => 'These assets can be checked out. Once they are assigned, they will assume a meta status of <i class="fas fa-circle text-blue"></i> <strong>Deployed</strong>.',
        'archived'   => '이러한 애셋은 체크 아웃 할 수 없으며 보관 된보기에만 표시됩니다. 이는 예산 / 역사적 목적을 위해 자산에 대한 정보를 보유하지만 일상적인 자산 목록에서 유지하는 데 유용합니다.',
        'pending'   => '이러한 자산은 아직 수리를 위해 나가는 품목에 자주 사용되지만 누구에게나 할당 될 수는 없지만 유통에 회부 될 것으로 예상됩니다.',
    ],

];
