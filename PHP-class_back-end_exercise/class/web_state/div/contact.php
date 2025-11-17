<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechFlow Solutions - 科技解決方案領導者</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="company.css">
</head>
<body>
    <div class="page-container">
        <!-- 頁首 -->
<?php include "header.php";?>

        <!-- 主要內容區 -->
        <main class="main-content">

<section class="hero-section">
    <h1>聯絡我們</h1>
    <p>我們很樂意聽到您的意見和建議。請填寫以下表格與我們聯繫</p>
</section>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px; margin-bottom: 40px;">
    <section class="content-card">
        <h2>聯絡表單</h2>
        <form method="post" action="#">
            <div class="form-group">
                <label for="name">姓名 *</label>
                <input type="text" id="name" name="name" placeholder="請輸入您的姓名" required>
            </div>
            
            <div class="form-group">
                <label for="email">電子郵件 *</label>
                <input type="email" id="email" name="email" placeholder="請輸入您的電子郵件" required>
            </div>
            
            <div class="form-group">
                <label for="phone">電話</label>
                <input type="tel" id="phone" name="phone" placeholder="請輸入您的電話號碼">
            </div>
            
            <div class="form-group">
                <label for="company">公司名稱</label>
                <input type="text" id="company" name="company" placeholder="請輸入您的公司名稱">
            </div>
            
            <div class="form-group">
                <label for="subject">主題 *</label>
                <select id="subject" name="subject" style="width: 100%; padding: 12px 14px; background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 10px; color: #fff; font-size: 14px;" required>
                    <option value="">-- 請選擇主題 --</option>
                    <option value="consultation">諮詢服務</option>
                    <option value="support">技術支援</option>
                    <option value="partnership">合作機會</option>
                    <option value="feedback">意見反饋</option>
                    <option value="other">其他</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="message">訊息 *</label>
                <textarea id="message" name="message" placeholder="請輸入您的訊息..." required></textarea>
            </div>
            
            <div class="form-group">
                <label style="display: flex; gap: 8px; align-items: center;">
                    <input type="checkbox" name="privacy" required style="width: auto;">
                    我同意 <a href="#" style="color: #7c3aed; text-decoration: none;">隱私政策</a> 和 <a href="#" style="color: #7c3aed; text-decoration: none;">服務條款</a>
                </label>
            </div>
            
            <button type="submit" class="btn-primary" style="width: 100%; justify-content: center;">送出訊息</button>
        </form>
        
        <p style="font-size: 12px; color: rgba(255, 255, 255, 0.6); margin-top: 16px; text-align: center;">* 表示必填欄位</p>
    </section>
    
    <section class="content-card">
        <h2>聯絡資訊</h2>
        
        <div style="margin-bottom: 32px;">
            <h4 style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                <span style="font-size: 20px;">📍</span> 辦公地址
            </h4>
            <p style="margin: 0;">TechFlow Solutions 台灣總部<br>台北市信義區科技路 123 號 15 樓<br>台灣 110043</p>
        </div>
        
        <div style="margin-bottom: 32px;">
            <h4 style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                <span style="font-size: 20px;">📞</span> 電話
            </h4>
            <p style="margin: 0;"><strong>主線：</strong> 02-XXXX-5678<br><strong>銷售：</strong> 02-XXXX-1111<br><strong>支援：</strong> 02-XXXX-2222</p>
        </div>
        
        <div style="margin-bottom: 32px;">
            <h4 style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                <span style="font-size: 20px;">📧</span> 電子郵件
            </h4>
            <p style="margin: 0;"><strong>一般查詢：</strong> <a href="mailto:info@techflow.com" style="color: #7c3aed;">info@techflow.com</a><br><strong>銷售：</strong> <a href="mailto:sales@techflow.com" style="color: #7c3aed;">sales@techflow.com</a><br><strong>技術支援：</strong> <a href="mailto:support@techflow.com" style="color: #7c3aed;">support@techflow.com</a></p>
        </div>
        
        <div style="margin-bottom: 32px;">
            <h4 style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                <span style="font-size: 20px;">🕐</span> 營業時間
            </h4>
            <p style="margin: 0;"><strong>週一至週五：</strong> 09:00 - 18:00<br><strong>週六、日：</strong> 休息<br>（假日期間可預約）</p>
        </div>
        
        <div style="padding: 16px; background: rgba(124, 58, 237, 0.1); border-radius: 8px; border-left: 4px solid #7c3aed;">
            <h4 style="margin-top: 0; margin-bottom: 8px;">緊急支援</h4>
            <p style="margin: 0; font-size: 14px;">如需緊急技術支援，請撥打緊急熱線：<br><strong>02-XXXX-9999</strong></p>
        </div>
        
        <div style="margin-top: 32px;">
            <h4 style="margin-bottom: 12px;">追蹤我們</h4>
            <div class="social-links">
                <a href="#" class="social-icon">Facebook</a>
                <a href="#" class="social-icon">LinkedIn</a>
                <a href="#" class="social-icon">Twitter</a>
                <a href="#" class="social-icon">Instagram</a>
            </div>
        </div>
    </section>
</div>

<section class="content-card">
    <h2>常見問題</h2>
    
    <div style="display: grid; gap: 16px; margin-top: 24px;">
        <div style="padding: 16px; background: rgba(255, 255, 255, 0.02); border-radius: 8px;">
            <h4 style="margin: 0 0 8px 0;">Q: 如何開始與 TechFlow 合作？</h4>
            <p style="margin: 0; color: rgba(255, 255, 255, 0.7); font-size: 14px;">A: 您可以通過填寫聯絡表格、發送電子郵件或直接致電我們。我們的銷售團隊將與您聯繫並安排初次諮詢。</p>
        </div>
        
        <div style="padding: 16px; background: rgba(255, 255, 255, 0.02); border-radius: 8px;">
            <h4 style="margin: 0 0 8px 0;">Q: 您們是否提供免費諮詢？</h4>
            <p style="margin: 0; color: rgba(255, 255, 255, 0.7); font-size: 14px;">A: 是的，我們提供免費的初次需求分析諮詢。請聯絡我們的銷售部門以預約。</p>
        </div>
        
        <div style="padding: 16px; background: rgba(255, 255, 255, 0.02); border-radius: 8px;">
            <h4 style="margin: 0 0 8px 0;">Q: 項目通常需要多長時間完成？</h4>
            <p style="margin: 0; color: rgba(255, 255, 255, 0.7); font-size: 14px;">A: 項目時間取決於規模和複雜性。小型項目可能需要幾週，大型項目可能需要幾個月。我們將在初次諮詢時提供詳細的時間估計。</p>
        </div>
        
        <div style="padding: 16px; background: rgba(255, 255, 255, 0.02); border-radius: 8px;">
            <h4 style="margin: 0 0 8px 0;">Q: 您們提供售後支援嗎？</h4>
            <p style="margin: 0; color: rgba(255, 255, 255, 0.7); font-size: 14px;">A: 當然，我們為所有客戶提供全面的售後支援和維護服務。支援方案可根據您的需求定製。</p>
        </div>
        
        <div style="padding: 16px; background: rgba(255, 255, 255, 0.02); border-radius: 8px;">
            <h4 style="margin: 0 0 8px 0;">Q: 如何確保我的數據安全？</h4>
            <p style="margin: 0; color: rgba(255, 255, 255, 0.7); font-size: 14px;">A: 我們採用企業級的安全措施和最佳實踐來保護您的數據。所有系統都經過定期安全審計和滲透測試。</p>
        </div>
    </div>
</section>

<section class="content-card" style="text-align: center; margin-top: 40px;">
    <h3>有其他疑問？</h3>
    <p>瀏覽我們的部落格和資源中心，了解更多關於數位轉型的知識。</p>
    <a href="#" class="btn-secondary">訪問我們的資源中心</a>
</section>

        </main>

        <!-- 頁腳 -->
<?php include "footer.php";?>
    </div>
</body>
</html>
