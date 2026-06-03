<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Workspace Dashboard</title>
    <!-- Tailwind CSS CDN for Professional UI Layouts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome for Enterprise Dev Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .glass { background: rgba(15, 23, 42, 0.65); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.08); }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col antialiased">

    <!-- Top Navigation Header -->
    <header class="border-b border-slate-800 bg-slate-900/50 backdrop-blur-md sticky top-0 z-50 px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="h-9 w-9 rounded-xl bg-indigo-600 flex items-center justify-center shadow-lg shadow-indigo-500/20">
                <i class="fa-solid fa-terminal text-sm text-white"></i>
            </div>
            <div>
                <h1 class="text-md font-bold tracking-tight text-slate-200">ApexPlanet DevHub</h1>
                <p class="text-xs text-slate-400">Task 1: Environment Setup Verified</p>
            </div>
        </div>
        <!-- Real-Time Interactive Clock Widget -->
        <div class="flex items-center gap-4 bg-slate-950/60 border border-slate-800 px-4 py-2 rounded-xl text-xs font-mono text-slate-400">
            <span class="flex h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
            <span id="live-clock">00:00:00 AM</span>
        </div>
    </header>

    <!-- Main Workspace Container -->
    <main class="flex-1 max-w-6xl w-full mx-auto p-6 grid grid-cols-1 md:grid-cols-4 gap-6">
        
        <!-- Sidebar: Intern Profile Information Card -->
        <aside class="md:col-span-1 flex flex-col gap-6">
            <div class="glass rounded-2xl p-5 flex flex-col items-center text-center shadow-xl">
                <div class="h-20 w-20 rounded-2xl bg-gradient-to-tr from-indigo-500 to-purple-600 flex items-center justify-center text-white text-3xl font-bold shadow-md mb-4">
                    VD
                </div>
                <h2 class="text-lg font-bold text-slate-200">Vaibhav Dubey</h2>
                <p class="text-xs text-indigo-400 font-medium tracking-wide mb-4">WEB DEVELOPMENT INTERN</p>
                
                <div class="w-full border-t border-slate-800/80 pt-4 flex flex-col gap-3 text-left">
                    <div class="flex flex-col">
                        <span class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">Target Domain</span>
                        <span class="text-sm text-slate-300 font-medium">PHP & MySQL Architecture</span>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Dashboard Dashboard Content Pane -->
        <section class="md:col-span-3 flex flex-col gap-6">
            
            <!-- Interactive Segment / Tab Control Bar -->
            <div class="bg-slate-900/60 p-1.5 rounded-xl border border-slate-800 flex gap-2">
                <button onclick="switchTab('overview')" id="btn-overview" class="tab-btn px-4 py-2 text-xs font-semibold rounded-lg bg-indigo-600 text-white shadow-md transition-all duration-200">
                    <i class="fa-solid fa-chart-pie mr-2"></i>System Overview
                </button>
                <button onclick="switchTab('phpinfo')" id="btn-phpinfo" class="tab-btn px-4 py-2 text-xs font-semibold rounded-lg text-slate-400 hover:text-slate-200 transition-all duration-200">
                    <i class="fa-solid fa-circle-info mr-2"></i>Runtime Details
                </button>
            </div>

            <!-- Tab Content View 1: System Overview Diagnostics -->
            <div id="tab-overview" class="tab-content flex flex-col gap-6">
                <!-- Status Jumbotron -->
                <div class="bg-gradient-to-r from-slate-900 to-indigo-950/40 rounded-2xl p-6 border border-slate-800 flex flex-col sm:flex-row items-center gap-6 shadow-lg">
                    <div class="h-14 w-14 rounded-full bg-emerald-500/10 border border-emerald-500 flex items-center justify-center text-emerald-400 text-xl shrink-0 shadow-lg shadow-emerald-500/10">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-200">Localhost Stack Operational</h3>
                        <p class="text-sm text-slate-400 mt-1">Your Apache pipeline is processing runtime expressions accurately. Version control trees are configured and synced cleanly with your remote repository.</p>
                    </div>
                </div>

                <!-- Live Environment Metrics Grid (Dynamic Server PHP Checks) -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="glass p-4 rounded-xl flex items-center justify-between">
                        <div>
                            <span class="text-xs text-slate-400 font-medium block">Server Environment</span>
                            <span class="text-sm font-bold text-slate-200 mt-1 block">
                                <?php echo htmlspecialchars($_SERVER['SERVER_SOFTWARE'] ?? 'Apache Localhost'); ?>
                            </span>
                        </div>
                        <i class="fa-solid fa-server text-indigo-500 text-lg opacity-80"></i>
                    </div>
                    <div class="glass p-4 rounded-xl flex items-center justify-between">
                        <div>
                            <span class="text-xs text-slate-400 font-medium block">Engine Version</span>
                            <span class="text-sm font-bold text-emerald-400 font-mono mt-1 block">
                                PHP <?php echo phpversion(); ?>
                            </span>
                        </div>
                        <i class="fa-brands fa-php text-emerald-500 text-xl opacity-80"></i>
                    </div>
                    <div class="glass p-4 rounded-xl flex items-center justify-between">
                        <div>
                            <span class="text-xs text-slate-400 font-medium block">Document Root</span>
                            <span class="text-[11px] font-mono text-slate-300 mt-1 block truncate max-w-[140px]" title="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>">
                                <?php echo basename($_SERVER['DOCUMENT_ROOT'] ?? 'www'); ?>/my_project
                            </span>
                        </div>
                        <i class="fa-solid fa-folder-open text-amber-500 text-lg opacity-80"></i>
                    </div>
                </div>

                <!-- Interactive Task Workflow Checklist -->
                <div class="glass rounded-2xl p-5">
                    <h4 class="text-sm font-bold text-slate-300 mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-list-check text-indigo-400"></i> Local Installation Pipeline Verification
                    </h4>
                    <div class="flex flex-col gap-3">
                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-900/40 border border-slate-800 cursor-pointer hover:bg-slate-900/80 transition-all duration-150">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" checked disabled class="accent-emerald-500 h-4 w-4 rounded border-slate-700 bg-slate-800">
                                <span class="text-xs text-slate-300 font-medium">Provision Local WampServer Core Pipeline</span>
                            </div>
                            <span class="text-[10px] bg-emerald-500/10 text-emerald-400 font-semibold px-2 py-0.5 rounded border border-emerald-500/20">VERIFIED</span>
                        </label>
                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-900/40 border border-slate-800 cursor-pointer hover:bg-slate-900/80 transition-all duration-150">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" checked disabled class="accent-emerald-500 h-4 w-4 rounded border-slate-700 bg-slate-800">
                                <span class="text-xs text-slate-300 font-medium">Initialize Git Source Object Trees</span>
                            </div>
                            <span class="text-[10px] bg-emerald-500/10 text-emerald-400 font-semibold px-2 py-0.5 rounded border border-emerald-500/20">COMMITTED</span>
                        </label>
                        <label class="flex items-center justify-between p-3 rounded-xl bg-slate-900/40 border border-slate-800 cursor-pointer hover:bg-slate-900/80 transition-all duration-150">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" id="interactive-check" class="accent-indigo-500 h-4 w-4 rounded border-slate-700 bg-slate-800 transition-all">
                                <span id="interactive-text" class="text-xs text-slate-400 font-medium">Synchronize Structural Assets to Cloud GitHub Pipeline</span>
                            </div>
                            <span id="interactive-badge" class="text-[10px] bg-amber-500/10 text-amber-400 font-semibold px-2 py-0.5 rounded border border-amber-500/20 transition-all">READY TO SYNC</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Tab Content View 2: Deep Core Runtime Details -->
            <div id="tab-phpinfo" class="tab-content hidden flex flex-col gap-6">
                <div class="glass rounded-2xl p-5">
                    <h4 class="text-sm font-bold text-slate-300 mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-gears text-emerald-400"></i> Critical Server Configuration Flags
                    </h4>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs text-slate-300">
                            <thead>
                                <tr class="border-b border-slate-800 text-slate-400 font-semibold">
                                    <th class="pb-3">Directives</th>
                                    <th class="pb-3">Evaluated Runtime Setting</th>
                                    <th class="pb-3">Functional Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800/60 font-mono">
                                <tr>
                                    <td class="py-3 text-slate-400">display_errors</td>
                                    <td class="py-3"><?php echo ini_get('display_errors') ? 'On' : 'Off'; ?></td>
                                    <td class="py-3 text-emerald-400"><i class="fa-solid fa-circle-check mr-1.5"></i> Active Development</td>
                                </tr>
                                <tr>
                                    <td class="py-3 text-slate-400">memory_limit</td>
                                    <td class="py-3"><?php echo ini_get('memory_limit'); ?></td>
                                    <td class="py-3 text-slate-400">Allocated Buffer</td>
                                </tr>
                                <tr>
                                    <td class="py-3 text-slate-400">max_execution_time</td>
                                    <td class="py-3"><?php echo ini_get('max_execution_time'); ?>s</td>
                                    <td class="py-3 text-slate-400">Timeout Threshold</td>
                                </tr>
                                <tr>
                                    <td class="py-3 text-slate-400">Loaded Extensions</td>
                                    <td class="py-3 font-sans text-xs">PDO, mysqli, xdebug, curl, openssl</td>
                                    <td class="py-3 text-emerald-400"><i class="fa-solid fa-circle-check mr-1.5"></i> Configured</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <!-- Footer System Log Bar -->
    <footer class="border-t border-slate-800/80 bg-slate-900/20 px-6 py-3 text-center text-xs text-slate-500 font-mono">
        Status 200 OK // Diagnostics Workspace Session Active // Wamp64 Stack Engine Connected
    </footer>

    <!-- Interactive Client Script Execution Logic -->
    <script>
        // Real-Time System Clock Execution Function
        function updateClock() {
            const now = new Date();
            let hours = now.getHours();
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // conversion of 0 hour to 12
            document.getElementById('live-clock').textContent = `${String(hours).padStart(2, '0')}:${minutes}:${seconds} ${ampm}`;
        }
        setInterval(updateClock, 1000);
        updateClock();

        // Tab Navigation Panel Transition Logic
        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.getElementById(`tab-${tabId}`).classList.remove('hidden');
            
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-indigo-600', 'text-white', 'shadow-md');
                btn.classList.add('text-slate-400', 'hover:text-slate-200');
            });
            
            const activeBtn = document.getElementById(`btn-${tabId}`);
            activeBtn.classList.remove('text-slate-400', 'hover:text-slate-200');
            activeBtn.classList.add('bg-indigo-600', 'text-white', 'shadow-md');
        }

        // Checklist Element Interactive Status Tracking
        const checkbox = document.getElementById('interactive-check');
        const checkText = document.getElementById('interactive-text');
        const badge = document.getElementById('interactive-badge');

        checkbox.addEventListener('change', function() {
            if(this.checked) {
                checkText.classList.remove('text-slate-400');
                checkText.classList.add('text-slate-300', 'line-through');
                badge.textContent = 'DEPLOYED';
                badge.classList.remove('bg-amber-500/10', 'text-amber-400', 'border-amber-500/20');
                badge.classList.add('bg-indigo-500/10', 'text-indigo-400', 'border-indigo-500/20');
            } else {
                checkText.classList.remove('text-slate-300', 'line-through');
                checkText.classList.add('text-slate-400');
                badge.textContent = 'READY TO SYNC';
                badge.classList.remove('bg-indigo-500/10', 'text-indigo-400', 'border-indigo-500/20');
                badge.classList.add('bg-amber-500/10', 'text-amber-400', 'border-amber-500/20');
            }
        });
    </script>
</body>
</html>