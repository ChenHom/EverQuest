<?php

namespace App\Enums;

/**
 * 1.待辦（Pending/To Do）：任務已創建，但尚未開始。
 * 2. 進行中（In Progress）：任務正在進行中。
 * 3. 完成（Completed）：任務已經完成。
 * 4. 已取消（Cancelled）：任務已被取消，不再需要完成。
 * 5. 已延期（Deferred/On Hold）：任務暫時被推遲或暫停，會在未來的某個時間點重新開始。
 */
enum TaskStatus: string
{
    use traitCommonFunction;

    case Pending = 'pending';
    case InProgress = 'in_progress';
    case Completed = 'completed';
    case Cancelled = 'cancelled';
    case Deferred = 'deferred';
}
