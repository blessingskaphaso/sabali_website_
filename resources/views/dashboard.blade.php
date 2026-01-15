import React, { useState } from 'react';
import { 
  LayoutDashboard, 
  Users, 
  HandCoins, 
  BarChart3, 
  Settings, 
  UserCircle, 
  CreditCard, 
  FileText, 
  LifeBuoy, 
  Bell, 
  Search, 
  Plus, 
  ArrowUpRight, 
  Clock, 
  CheckCircle2, 
  AlertCircle,
  ShieldCheck,
  Zap,
  ChevronRight,
  TrendingUp,
  LogOut,
  Menu,
  X
} from "lucide-react";
import { 
  Card, 
  CardContent, 
  CardHeader, 
  CardTitle,
  Button,
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
  Badge,
  Switch,
  Label,
  Input,
  Avatar,
  AvatarFallback,
  AvatarImage,
  Tooltip,
  TooltipContent,
  TooltipProvider,
  TooltipTrigger,
  Separator
} from '@/components/ui';

const SabaliDashboard = () => {
  const [isAdmin, setIsAdmin] = useState(true);
  const [sidebarOpen, setSidebarOpen] = useState(true);

  // --- MOCK DATA ---
  const adminMetrics = [
    { title: "Total Users", value: "1,284", change: "+12%", icon: <Users className="w-5 h-5" />, gradient: "from-blue-600 to-indigo-600" },
    { title: "Active Loans", value: "458", change: "+5.4%", icon: <HandCoins className="w-5 h-5" />, gradient: "from-emerald-600 to-teal-600" },
    { title: "Pending Approvals", value: "24", change: "-2", icon: <Clock className="w-5 h-5" />, gradient: "from-amber-500 to-orange-600" },
    { title: "Monthly Revenue", value: "MK 8.4M", change: "+18%", icon: <TrendingUp className="w-5 h-5" />, gradient: "from-red-500 to-rose-600" },
  ];

  const clientMetrics = [
    { title: "Active Loan Balance", value: "MK 450,000", change: "Due in 12 days", icon: <CreditCard className="w-5 h-5" />, gradient: "from-blue-600 to-blue-800" },
    { title: "Credit Score", value: "742", change: "Excellent", icon: <ShieldCheck className="w-5 h-5" />, gradient: "from-purple-600 to-indigo-600" },
    { title: "Next Payment", value: "MK 35,000", change: "Sept 25, 2024", icon: <Clock className="w-5 h-5" />, gradient: "from-emerald-500 to-green-600" },
  ];

  const adminActivities = [
    { id: 1, user: "Chifundo Phiri", action: "Applied for Business Loan", time: "2 mins ago", status: "pending" },
    { id: 2, user: "System", action: "Weekly Backup Completed", time: "45 mins ago", status: "success" },
    { id: 3, user: "Sarah Banda", action: "KYC Documents Verified", time: "2 hours ago", status: "success" },
    { id: 4, user: "James Mwale", action: "Repayment Overdue Alert", time: "5 hours ago", status: "error" },
  ];

  const clientLoans = [
    { id: "LN-8842", type: "Personal Loan", amount: "MK 200,000", rate: "12%", status: "Active", progress: 65 },
    { id: "LN-7721", type: "SME Growth", amount: "MK 1,500,000", rate: "10%", status: "Completed", progress: 100 },
    { id: "LN-9901", type: "Emergency Fund", amount: "MK 50,000", rate: "15%", status: "Pending", progress: 0 },
  ];

  const sidebarLinks = isAdmin 
    ? [
        { name: "Dashboard", icon: <LayoutDashboard size={20} />, active: true },
        { name: "Users", icon: <Users size={20} /> },
        { name: "Loans", icon: <HandCoins size={20} /> },
        { name: "Reports", icon: <BarChart3 size={20} /> },
        { name: "Settings", icon: <Settings size={20} /> },
      ]
    : [
        { name: "Dashboard", icon: <LayoutDashboard size={20} />, active: true },
        { name: "My Profile", icon: <UserCircle size={20} /> },
        { name: "My Loans", icon: <HandCoins size={20} /> },
        { name: "Payments", icon: <CreditCard size={20} /> },
        { name: "Documents", icon: <FileText size={20} /> },
        { name: "Support", icon: <LifeBuoy size={20} /> },
      ];

  const StatusIcon = ({ status }) => {
    switch(status) {
      case 'success': return <CheckCircle2 className="w-4 h-4 text-emerald-500" />;
      case 'error': return <AlertCircle className="w-4 h-4 text-rose-500" />;
      default: return <Clock className="w-4 h-4 text-amber-500" />;
    }
  };

  return (
    <div className="flex min-h-screen bg-slate-50 text-slate-900 font-sans">
      
      {/* --- SIDEBAR --- */}
      <aside className={`fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200 transform transition-transform duration-300 ease-in-out ${sidebarOpen ? 'translate-x-0' : '-translate-x-full'} lg:relative lg:translate-x-0`}>
        <div className="flex flex-col h-full">
          <div className="p-6 flex items-center gap-3">
            <div className="w-8 h-8 rounded-lg bg-gradient-to-br from-red-500 to-blue-700 flex items-center justify-center text-white font-bold">S</div>
            <h1 className="text-xl font-bold tracking-tight text-slate-800">Sabali Pro</h1>
          </div>
          
          <nav className="flex-1 px-4 space-y-1 mt-4">
            {sidebarLinks.map((link, idx) => (
              <a
                key={idx}
                href="#"
                className={`flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all ${link.active ? 'bg-blue-50 text-blue-600 shadow-sm' : 'text-slate-500 hover:bg-slate-100'}`}
              >
                {link.icon}
                <span className="font-medium text-sm">{link.name}</span>
              </a>
            ))}
          </nav>

          <div className="p-4 border-t border-slate-100">
            <div className="bg-slate-50 rounded-2xl p-4 flex flex-col gap-3">
              <div className="flex items-center justify-between">
                <span className="text-[10px] font-bold uppercase tracking-wider text-slate-400">View Mode</span>
                <Badge variant={isAdmin ? "destructive" : "secondary"} className="text-[10px]">{isAdmin ? 'Admin' : 'Client'}</Badge>
              </div>
              <div className="flex items-center justify-between gap-2">
                <Label htmlFor="role-mode" className="text-xs font-medium cursor-pointer">Switch Roles</Label>
                <Switch 
                  id="role-mode" 
                  checked={isAdmin} 
                  onCheckedChange={setIsAdmin} 
                />
              </div>
            </div>
            <Button variant="ghost" className="w-full mt-4 justify-start text-slate-500 hover:text-rose-600">
              <LogOut size={20} className="mr-3" />
              <span className="text-sm font-medium">Logout</span>
            </Button>
          </div>
        </div>
      </aside>

      {/* --- MAIN CONTENT --- */}
      <main className="flex-1 flex flex-col min-w-0 overflow-hidden">
        
        {/* Header */}
        <header className="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 lg:px-8 sticky top-0 z-40">
          <div className="flex items-center gap-4">
            <Button variant="ghost" size="icon" className="lg:hidden" onClick={() => setSidebarOpen(!sidebarOpen)}>
              <Menu size={20} />
            </Button>
            <div className="hidden md:flex items-center bg-slate-100 rounded-full px-3 py-1.5 w-64 border border-slate-200">
              <Search size={16} className="text-slate-400 mr-2" />
              <input type="text" placeholder="Search data..." className="bg-transparent border-none text-xs outline-none w-full" />
            </div>
          </div>

          <div className="flex items-center gap-3">
            <TooltipProvider>
              <Tooltip>
                <TooltipTrigger asChild>
                  <Button variant="ghost" size="icon" className="relative">
                    <Bell size={20} className="text-slate-500" />
                    <span className="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                  </Button>
                </TooltipTrigger>
                <TooltipContent>Notifications</TooltipContent>
              </Tooltip>
            </TooltipProvider>
            <Separator orientation="vertical" className="h-6 mx-1" />
            <div className="flex items-center gap-3 ml-2">
              <div className="text-right hidden sm:block">
                <p className="text-sm font-bold leading-none">{isAdmin ? 'Admin Portal' : 'John Doe'}</p>
                <p className="text-[11px] text-slate-500 mt-1">{isAdmin ? 'Super Administrator' : 'Premium Member'}</p>
              </div>
              <Avatar className="h-9 w-9 border-2 border-slate-100">
                <AvatarImage src={isAdmin ? "https://github.com/shadcn.png" : "https://i.pravatar.cc/150?u=a042581f4e29026704d"} />
                <AvatarFallback>SB</AvatarFallback>
              </Avatar>
            </div>
          </div>
        </header>

        {/* Dashboard Body */}
        <div className="flex-1 overflow-y-auto p-4 lg:p-8">
          <div className="max-w-7xl mx-auto space-y-8">
            
            {/* Welcome & Context Header */}
            <div>
              <h2 className="text-2xl font-bold text-slate-900 tracking-tight">
                {isAdmin ? "System Overview" : "Welcome back, John!"}
              </h2>
              <p className="text-slate-500 text-sm mt-1">
                {isAdmin ? "Real-time insights across all Sabali business units." : "Here is your financial status and loan progress."}
              </p>
            </div>

            {/* Metric Cards Grid */}
            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
              {(isAdmin ? adminMetrics : clientMetrics).map((m, idx) => (
                <Card key={idx} className="overflow-hidden border-none shadow-sm hover:shadow-md transition-shadow">
                  <div className={`h-1.5 w-full bg-gradient-to-r ${m.gradient}`} />
                  <CardHeader className="flex flex-row items-center justify-between pb-2">
                    <CardTitle className="text-xs font-semibold text-slate-500 uppercase tracking-wider">{m.title}</CardTitle>
                    <div className="p-2 rounded-lg bg-slate-50 text-slate-400">
                      {m.icon}
                    </div>
                  </CardHeader>
                  <CardContent>
                    <div className="text-2xl font-bold text-slate-900">{m.value}</div>
                    <p className={`text-xs mt-1 font-medium ${isAdmin ? 'text-emerald-600' : 'text-slate-500'}`}>
                      {m.change}
                    </p>
                  </CardContent>
                </Card>
              ))}
              
              {/* Add Tile for Client Mode */}
              {!isAdmin && (
                <Card className="flex flex-col items-center justify-center border-dashed border-2 bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group">
                  <div className="p-3 rounded-full bg-white shadow-sm group-hover:scale-110 transition-transform">
                    <Plus className="w-5 h-5 text-blue-600" />
                  </div>
                  <span className="text-xs font-bold text-blue-600 mt-2">New Loan App</span>
                </Card>
              )}
            </div>

            <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
              {/* MAIN CONTENT AREA: Table/Activities */}
              <div className="lg:col-span-2 space-y-8">
                
                {/* Admin/Client Specific List */}
                <Card className="shadow-sm border-slate-200">
                  <CardHeader className="flex flex-row items-center justify-between">
                    <div>
                      <CardTitle className="text-lg">{isAdmin ? "Recent Transactions" : "My Loan Schedule"}</CardTitle>
                      <p className="text-xs text-slate-500 mt-1">Overview of the last 30 days</p>
                    </div>
                    <Button variant="outline" size="sm" className="text-xs font-bold h-8">View All</Button>
                  </CardHeader>
                  <CardContent>
                    {isAdmin ? (
                      <Table>
                        <TableHeader>
                          <TableRow>
                            <TableHead className="text-xs uppercase">User</TableHead>
                            <TableHead className="text-xs uppercase">Activity</TableHead>
                            <TableHead className="text-xs uppercase text-right">Status</TableHead>
                          </TableRow>
                        </TableHeader>
                        <TableBody>
                          {adminActivities.map((act) => (
                            <TableRow key={act.id}>
                              <TableCell className="font-medium text-sm">{act.user}</TableCell>
                              <TableCell className="text-slate-500 text-sm">{act.action}</TableCell>
                              <TableCell className="text-right">
                                <Badge variant={act.status === 'success' ? 'success' : 'outline'} className="text-[10px]">
                                  {act.status}
                                </Badge>
                              </TableCell>
                            </TableRow>
                          ))}
                        </TableBody>
                      </Table>
                    ) : (
                      <Table>
                        <TableHeader>
                          <TableRow>
                            <TableHead className="text-xs uppercase">Loan ID</TableHead>
                            <TableHead className="text-xs uppercase">Type</TableHead>
                            <TableHead className="text-xs uppercase">Amount</TableHead>
                            <TableHead className="text-xs uppercase text-right">Status</TableHead>
                          </TableRow>
                        </TableHeader>
                        <TableBody>
                          {clientLoans.map((loan) => (
                            <TableRow key={loan.id}>
                              <TableCell className="font-bold text-blue-600 text-xs">{loan.id}</TableCell>
                              <TableCell className="text-sm font-medium">{loan.type}</TableCell>
                              <TableCell className="text-sm">{loan.amount}</TableCell>
                              <TableCell className="text-right">
                                <Badge className={`text-[10px] ${loan.status === 'Active' ? 'bg-blue-100 text-blue-700' : 'bg-slate-100 text-slate-700'}`}>
                                  {loan.status}
                                </Badge>
                              </TableCell>
                            </TableRow>
                          ))}
                        </TableBody>
                      </Table>
                    )}
                  </CardContent>
                </Card>

                {/* Quick Actions Tile Grid */}
                <div>
                  <h3 className="text-sm font-bold uppercase tracking-widest text-slate-400 mb-4">Quick Operations</h3>
                  <div className="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    {isAdmin ? (
                      <>
                        <QuickAction icon={<Users className="text-blue-600" />} label="Review KYC" />
                        <QuickAction icon={<HandCoins className="text-emerald-600" />} label="Disburse" />
                        <QuickAction icon={<BarChart3 className="text-purple-600" />} label="Audit Log" />
                        <QuickAction icon={<Settings className="text-slate-600" />} label="Security" />
                      </>
                    ) : (
                      <>
                        <QuickAction icon={<Zap className="text-amber-500" />} label="Fast Cash" />
                        <QuickAction icon={<CreditCard className="text-blue-600" />} label="Repay Loan" />
                        <QuickAction icon={<FileText className="text-rose-600" />} label="Statements" />
                        <QuickAction icon={<LifeBuoy className="text-indigo-600" />} label="Help Desk" />
                      </>
                    )}
                  </div>
                </div>
              </div>

              {/* SIDEBAR WIDGETS */}
              <div className="space-y-6">
                <Card className="bg-slate-900 text-white border-none shadow-xl overflow-hidden relative">
                  <div className="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 blur-3xl rounded-full"></div>
                  <CardHeader>
                    <CardTitle className="text-lg flex items-center gap-2">
                      <Zap className="w-5 h-5 text-amber-400 fill-amber-400" />
                      {isAdmin ? "System Health" : "Savings Goal"}
                    </CardTitle>
                  </CardHeader>
                  <CardContent className="space-y-4">
                    <div className="flex justify-between text-xs font-medium opacity-70">
                      <span>{isAdmin ? "CPU Usage" : "Home Deposit"}</span>
                      <span>{isAdmin ? "14%" : "MK 850,000"}</span>
                    </div>
                    <div className="h-2 w-full bg-white/10 rounded-full overflow-hidden">
                      <div className="h-full bg-amber-400 rounded-full" style={{ width: isAdmin ? '14%' : '45%' }}></div>
                    </div>
                    <Button variant="secondary" className="w-full text-xs font-bold h-9 bg-white/10 hover:bg-white/20 text-white border-none">
                      {isAdmin ? "Open Diagnostics" : "Set New Goal"}
                    </Button>
                  </CardContent>
                </Card>

                <Card className="shadow-sm">
                  <CardHeader>
                    <CardTitle className="text-sm font-bold uppercase text-slate-400">Activity Timeline</CardTitle>
                  </CardHeader>
                  <CardContent className="px-0">
                    <div className="space-y-0">
                      {(isAdmin ? adminActivities : adminActivities.slice(0, 3)).map((item, idx) => (
                        <div key={idx} className="flex gap-4 p-4 hover:bg-slate-50 transition-colors border-b border-slate-50 last:border-0">
                          <div className="mt-1">
                            <StatusIcon status={item.status} />
                          </div>
                          <div>
                            <p className="text-sm font-semibold">{item.action}</p>
                            <p className="text-xs text-slate-500 mt-0.5">{item.time}</p>
                          </div>
                          <ChevronRight className="ml-auto w-4 h-4 text-slate-300" />
                        </div>
                      ))}
                    </div>
                  </CardContent>
                </Card>
              </div>

            </div>
          </div>
        </div>
      </main>
    </div>
  );
};

// --- HELPER COMPONENT ---
const QuickAction = ({ icon, label }) => (
  <button className="flex flex-col items-center justify-center p-4 bg-white rounded-2xl shadow-sm border border-slate-200 hover:border-blue-500 hover:shadow-md transition-all group">
    <div className="p-3 rounded-xl bg-slate-50 group-hover:bg-blue-50 mb-3 transition-colors">
      {React.cloneElement(icon, { size: 24 })}
    </div>
    <span className="text-[11px] font-bold text-slate-600 uppercase tracking-tight">{label}</span>
  </button>
);

export default SabaliDashboard;