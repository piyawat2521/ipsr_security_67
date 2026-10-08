<div id="contact-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden">
            
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 md:p-6 bg-slate-50 border-b border-slate-200">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">
                            ขอรับคำปรึกษาและสำรวจพื้นที่อาคารฟรี
                        </h3>
                        <p class="text-xs text-slate-500">กรอกข้อมูลเพื่อให้เจ้าหน้าที่ติดต่อกลับภายใน 24 ชม.</p>
                    </div>
                </div>
                <button type="button" class="text-slate-400 bg-transparent hover:bg-slate-200 hover:text-slate-900 rounded-xl text-sm w-9 h-9 ms-auto inline-flex justify-center items-center" data-modal-hide="contact-modal">
                    <svg class="w-4 h-4" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">ปิดหน้าต่าง</span>
                </button>
            </div>

            <!-- Modal body / Form -->
            <form action="#" method="POST" onsubmit="event.preventDefault(); alert('ขอบคุณครับ! เจ้าหน้าที่ IPSR Security ได้รับข้อมูลแล้ว และจะติดต่อกลับโดยเร็วที่สุด');" class="p-6 space-y-4">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="fullname" class="block mb-1.5 text-xs font-bold text-slate-700 uppercase">ชื่อ-นามสกุลผู้ติดต่อ <span class="text-rose-500">*</span></label>
                        <input type="text" id="fullname" required placeholder="คุณสมชาย ใจดี" class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                    </div>
                    <div>
                        <label for="phone" class="block mb-1.5 text-xs font-bold text-slate-700 uppercase">เบอร์โทรศัพท์ <span class="text-rose-500">*</span></label>
                        <input type="tel" id="phone" required placeholder="081-234-5678" class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="building_type" class="block mb-1.5 text-xs font-bold text-slate-700 uppercase">ประเภทอาคาร <span class="text-rose-500">*</span></label>
                        <select id="building_type" required class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                            <option value="">-- โปรดเลือกประเภทอาคาร --</option>
                            <option value="office">อาคารสำนักงาน (Office Building)</option>
                            <option value="condo">คอนโดมิเนียม / ที่อยู่อาศัย (Residential)</option>
                            <option value="mall">ศูนย์การค้า / คอมมูนิตี้มอลล์ (Shopping Mall)</option>
                            <option value="factory">โรงงาน / คลังสินค้า (Factory & Warehouse)</option>
                            <option value="other">อื่นๆ</option>
                        </select>
                    </div>
                    <div>
                        <label for="email" class="block mb-1.5 text-xs font-bold text-slate-700 uppercase">อีเมล</label>
                        <input type="email" id="email" placeholder="example@company.com" class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                    </div>
                </div>

                <div>
                    <label for="note" class="block mb-1.5 text-xs font-bold text-slate-700 uppercase">รายละเอียดที่ต้องการเน้นย้ำ</label>
                    <textarea id="note" rows="3" placeholder="ระบุจำนวนชั้น จุดทางเข้า หรือความต้องการเพิ่มเติม..." class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3"></textarea>
                </div>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-end space-x-3">
                    <button data-modal-hide="contact-modal" type="button" class="py-2.5 px-5 text-sm font-semibold text-slate-600 bg-slate-100 rounded-xl hover:bg-slate-200">
                        ยกเลิก
                    </button>
                    <button type="submit" class="py-2.5 px-6 text-sm font-bold text-white bg-blue-600 rounded-xl hover:bg-blue-700 shadow-md shadow-blue-500/20">
                        ส่งข้อมูลขอคำปรึกษา
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
