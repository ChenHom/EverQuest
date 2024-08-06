<?php

namespace App\Enums;

/**
 * 1. 非常低優先級（Very Low）：這些任務重要性最低，可以在所有其他任務完成後再處理，或作為非緊急的長期任務。
 * 2. 低優先級（Low）：這些任務不太重要且不緊急，可以在較少緊急和重要的任務後處理。
 * 3. 中等優先級（Medium）：這些任務有一定的重要性和緊急程度，需要在一定期限內完成。
 * 4. 高優先級（High）：這些任務非常重要或緊急，需要優先處理。
 * 5. 非常高優先級（Critical/Very High）：這些任務是最重要和最緊急的，必須立即處理和完成。
 */
enum TaskPriorities: int
{
    use traitCommonFunction;

    case VeryLow = 1;
    case Low = 2;
    case Medium = 3;
    case High = 4;
    case VeryHigh = 5;
}
