<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Career Goal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>  body {
    background: linear-gradient(135deg, #26D0CE 0%, #1A2980 100%);
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.main-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.content-wrapper {
    max-width: 900px;
    width: 100%;
}

.mascot {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #20B2AA, #48D1CC);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
    position: relative;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.mascot::before {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    background: white;
    border-radius: 50%;
    top: 20px;
    left: 22px;
    box-shadow: 25px 0 0 white;
}

.mascot::after {
    content: '';
    position: absolute;
    width: 8px;
    height: 8px;
    background: #333;
    border-radius: 50%;
    top: 26px;
    left: 28px;
    box-shadow: 25px 0 0 #333;
}

.glasses {
    position: absolute;
    width: 60px;
    height: 25px;
    border: 3px solid #333;
    border-radius: 20px;
    top: 22px;
    left: 10px;
}

.glasses::before {
    content: '';
    position: absolute;
    width: 25px;
    height: 22px;
    border: 3px solid #333;
    border-radius: 15px;
    right: -3px;
    top: -3px;
}

.glasses::after {
    content: '';
    position: absolute;
    width: 8px;
    height: 3px;
    background: #333;
    top: 8px;
    left: 20px;
}

.main-title {
    color: white;
    font-size: 2.5rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
}

.subtitle {
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 50px;
    line-height: 1.6;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.goal-card {
    background: white;
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 3px solid transparent;
    height: 100%;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden;
}

.goal-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #26D0CE, #1A2980);
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 17px;
}

.goal-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.goal-card:hover::before {
    opacity: 0.05;
}

.goal-card.selected {
    border-color: #20B2AA;
    background: linear-gradient(135deg, #E0F2F1, #B2DFDB);
    transform: translateY(-5px);
}

.goal-card.selected::before {
    opacity: 0.1;
}

.goal-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 25px;
    background: linear-gradient(135deg, #20B2AA, #008B8B);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
}

.goal-icon i {
    font-size: 2.5rem;
    color: white;
}

.goal-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0;
    position: relative;
    z-index: 2;
}

.continue-btn {
    background: linear-gradient(135deg, #20B2AA, #008B8B);
    border: none;
    padding: 15px 40px;
    border-radius: 50px;
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    margin-top: 50px;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(32, 178, 170, 0.3);
}

.continue-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(32, 178, 170, 0.4);
    background: linear-gradient(135deg, #008B8B, #006666);
}

.continue-btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

@media (max-width: 768px) {
    .main-title {
        font-size: 2rem;
    }
    
    .subtitle {
        font-size: 1rem;
        margin-bottom: 40px;
    }
    
    .goal-card {
        padding: 30px 20px;
        margin-bottom: 20px;
    }
    
    .goal-icon {
        width: 60px;
        height: 60px;
        margin-bottom: 20px;
    }
    
    .goal-icon i {
        font-size: 2rem;
    }
}

</style>

</head>
<body>
    <div class="main-container">
        <div class="content-wrapper">
            <!-- Mascot -->
            <div class="mascot">
                <div class="glasses"></div>
            </div>
            
            <!-- Title -->
            <h1 class="main-title">Halo San Jossye!</h1>
            <p class="subtitle">
                Ceritakan sedikit tentang diri Anda agar saya dapat memberikan rekomendasi terbaik. Pertama, apa tujuan Anda?
            </p>
            
            <!-- Goal Selection Cards -->
            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="goal-card" data-goal="start-career">
                        <div class="goal-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <p class="goal-title">Memulai karir saya</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="goal-card" data-goal="change-career">
                        <div class="goal-icon">
                            <i class="bi bi-arrow-left-right"></i>
                        </div>
                        <p class="goal-title">Mengubah karir saya</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="goal-card" data-goal="grow-role">
                        <div class="goal-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <p class="goal-title">Tumbuh dalam peran saya saat ini</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="goal-card" data-goal="explore-topics">
                        <div class="goal-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <p class="goal-title">Jelajahi topik di luar pekerjaan</p>
                    </div>
                </div>
            </div>
            
            <!-- Continue Button -->
            <div class="text-center">
                <button class="continue-btn" id="continueBtn" disabled>
                    Berikutnya <i class="bi bi-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Goal selection functionality
        const goalCards = document.querySelectorAll('.goal-card');
        const continueBtn = document.getElementById('continueBtn');
        let selectedGoal = null;

        goalCards.forEach(card => {
            card.addEventListener('click', function() {
                // Remove selected class from all cards
                goalCards.forEach(c => c.classList.remove('selected'));
                
                // Add selected class to clicked card
                this.classList.add('selected');
                
                // Store selected goal
                selectedGoal = this.dataset.goal;
                
                // Enable continue button
                continueBtn.disabled = false;
                
                // Add subtle animation
                this.style.transform = 'translateY(-5px) scale(1.02)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-5px)';
                }, 200);
            });
        });

        // Continue button functionality
        continueBtn.addEventListener('click', function() {
            if (selectedGoal) {
                // Add loading state
                this.innerHTML = '<i class="bi bi-arrow-repeat spinner-border spinner-border-sm me-2"></i>Memproses...';
                
                // Simulate processing
                setTimeout(() => {
                    alert(`Tujuan karir dipilih: ${getGoalText(selectedGoal)}`);
                    // Here you would typically redirect or proceed to next step
                    this.innerHTML = 'Berikutnya <i class="bi bi-arrow-right ms-2"></i>';
                }, 1500);
            }
        });

        function getGoalText(goalKey) {
            const goalTexts = {
                'start-career': 'Memulai karir saya',
                'change-career': 'Mengubah karir saya',
                'grow-role': 'Tumbuh dalam peran saya saat ini',
                'explore-topics': 'Jelajahi topik di luar pekerjaan'
            };
            return goalTexts[goalKey] || 'Unknown goal';
        }

        // Add smooth scroll and entrance animations
        window.addEventListener('load', function() {
            const cards = document.querySelectorAll('.goal-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 150);
            });
        });
    </script>
</body>
</html>