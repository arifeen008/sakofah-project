<?php

// ======== การตั้งค่า ========
$outputBaseDir = 'project_assets_final'; // โฟลเดอร์สำหรับเก็บผลลัพธ์
$imageBaseDir = __DIR__ . DIRECTORY_SEPARATOR . 'public'; // ใช้ DIRECTORY_SEPARATOR เพื่อความเข้ากันได้
$viewsPath = __DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views';
// ==========================

/**
 * ฟังก์ชันทำความสะอาด Path ที่ปรับปรุงใหม่ทั้งหมด
 * @param string $path
 * @return string
 */
function clean_path($path) {
    // 1. ลบฟังก์ชันและวงเล็บที่ครอบอยู่
    $path = preg_replace('/^(asset|url)\s*\(|\)\s*$/', '', $path);
    
    // 2. ลบเครื่องหมายคำพูด ' " และช่องว่าง จากด้านหน้าและด้านหลังของสตริง
    $path = trim($path, ' \'\"');

    // 3. กำจัด Path แบบ 상대적인 (../)
    $path = str_replace('../', '', $path);
    
    // 4. ทำให้ Directory Separator เป็นแบบเดียวกัน (/) เพื่อการประมวลผลที่ง่าย
    $path = str_replace('\\', '/', $path);

    // 5. ลบ / ที่อาจจะอยู่ข้างหน้าสุด
    return ltrim($path, '/');
}

// --- ฟังก์ชันหลัก ---
function run() {
    global $outputBaseDir, $imageBaseDir, $viewsPath;

    echo "🚀 เริ่มสแกนและคัดลอก (เวอร์ชันสุดท้าย)...\n";
    if (!is_dir($outputBaseDir)) {
        mkdir($outputBaseDir, 0777, true);
    }

    $totalCopied = 0;
    $totalNotFound = 0;

    $directoryIterator = new RecursiveDirectoryIterator($viewsPath, RecursiveDirectoryIterator::SKIP_DOTS);
    $iterator = new RecursiveIteratorIterator($directoryIterator);
    $bladeFiles = new RegexIterator($iterator, '/^.+\.blade\.php$/i', RecursiveRegexIterator::GET_MATCH);

    foreach ($bladeFiles as $file) {
        $bladeFilePath = $file[0];
        $content = file_get_contents($bladeFilePath);
        
        preg_match_all('/["\'(][^"\'()]*\.(?:jpg|jpeg|png|gif|svg|webp|ico)["\')]/i', $content, $matches);
        
        $imagesFound = array_unique($matches[0]);

        if (empty($imagesFound)) continue;

        $bladeRelativePath = str_replace([$viewsPath . DIRECTORY_SEPARATOR, '.blade.php'], ['', ''], $bladeFilePath);
        echo "==================================================\n";
        echo "📁 กำลังประมวลผล: " . $bladeRelativePath . "\n";
        echo "==================================================\n";

        foreach ($imagesFound as $rawPath) {
            $cleanedPath = clean_path($rawPath);
            // สร้าง Source Path โดยใช้ DIRECTORY_SEPARATOR เพื่อให้ถูกต้องบนทุกระบบ
            $sourceFile = $imageBaseDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $cleanedPath);
            
            echo "   - Path ดิบที่เจอ: " . $rawPath . "\n";
            echo "   - Path ที่แปลงแล้ว: " . $cleanedPath . "\n";
            echo "   - กำลังค้นหาไฟล์ที่: " . $sourceFile . "\n";

            if (file_exists($sourceFile)) {
                $destinationDir = $outputBaseDir . DIRECTORY_SEPARATOR . dirname($bladeRelativePath);
                 if (!is_dir($destinationDir)) {
                    mkdir($destinationDir, 0777, true);
                }
                $destinationFile = $destinationDir . DIRECTORY_SEPARATOR . basename($cleanedPath);
                copy($sourceFile, $destinationFile);
                echo "   -> ✅ สำเร็จ! คัดลอก " . basename($cleanedPath) . "\n\n";
                $totalCopied++;
            } else {
                echo "   -> ❌ ไม่พบไฟล์!\n\n";
                $totalNotFound++;
            }
        }
    }

    echo "✨ การทำงานเสร็จสิ้น!\n";
    echo "    - คัดลอกสำเร็จ: " . $totalCopied . " ไฟล์\n";
    echo "    - ไม่พบไฟล์: " . $totalNotFound . " ไฟล์\n";
    echo "    - ผลลัพธ์ถูกเก็บไว้ในโฟลเดอร์ '" . $outputBaseDir . "'\n";
}

//--- รันสคริปต์ ---
run();

?>