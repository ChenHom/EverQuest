# 任務管理系統

## 目標

建立一個個人使用的任務管理系統，包含任務的建立、編輯、刪除、狀態更新、優先級設定、截止日期提醒、標籤和分類管理，以及日曆視圖。

## 系統架構總覽

### 主要技術選型

- **後端**：PHP（使用 Laravel 框架）
- **前端**：HTML、CSS、JavaScript
- **資料庫**：SQLite 或 MySQL
- **版本控制**：Git（GitHub 或 GitLab）

## 資料庫設計

### 任務表（tasks）

| 欄位名稱     | 類型       | 說明              |
| ------------ | ---------- | ----------------- |
| id           | 整數       | 自增，主鍵        |
| title        | 字串       | 任務標題          |
| description  | 文本       | 任務描述          |
| status       | 字串       | 任務狀態          |
| priority     | 整數       | 優先級            |
| due_date     | 日期時間   | 截止日期          |
| tags         | 字串       | 任務標籤（JSON）  |
| category     | 字串       | 任務分類          |
| created_at   | 時間戳     | 自動生成          |
| updated_at   | 時間戳     | 自動生成          |

## 程式架構流程

### 1. 設置開發環境

1. 安裝 **XAMPP** 或 **MAMP**，確保 PHP 和 MySQL 正常運行。
2. 安裝 **Composer**（PHP 的依賴管理工具）。
3. 使用 Composer 安裝 Laravel 框架。
4. 初始化 Git 儲存庫，並將專案上傳至 GitHub 或 GitLab。

### 2. 資料庫設計與遷移

1. 建立 **任務表** 的遷移檔案。
2. 編輯遷移檔案 `database/migrations/xxxx_xx_xx_create_tasks_table.php`。
3. 運行遷移以建立資料表。

### 3. 建立 Model

1. 建立 Task 模型。
2. 編輯模型 `app/Models/Task.php`。

### 4. 建立 Controller

1. 建立 TaskController。
2. 編輯控制器 `app/Http/Controllers/TaskController.php`。

### 5. 建立 View

1. 建立視圖文件夾 `resources/views/tasks`。
2. 建立視圖文件 `index.blade.php`、`create.blade.php`、`edit.blade.php`、`show.blade.php`。

### 6. 設置路由

1. 編輯路由文件 `routes/web.php`。

## 測試

1. 建立測試文件 `tests/Feature/TaskTest.php`。
2. 編寫測試案例以驗證任務的建立、更新、刪除、查看和列表功能。
