<?php
//Copyright (c) 2016 iFeiwu.com
 class Admin extends Item { function __construct() { $this->table = "\x61\x64\155\x69\x6e"; parent::__construct(); } public function postLogin($request_data) { goto tRYap; lWMJ1: $pass = $request_data["\160\x61\163\x73"]; goto EBtfP; DGz4R: $this->db->update($this->table, array("\x6a\163\x6f\x6e" => json_encode($json)), array("\x69\144", "\x3d", $admin["\x69\x64"])); goto vnmjW; jUESS: return $this->success($admin); goto nGct2; Jji5Y: $this->_log("\x6c\157\x67\151\x6e", array("\141\x64\x6d\x69\156\137\151\144" => $admin["\x69\144"], "\141\x64\x6d\x69\x6e\x5f\x6e\141\155\145" => $admin["\156\141\155\145"])); goto jUESS; x8HhC: return $this->error("\xe7\224\250\346\210\267\345\220\215\346\210\x96\345\xaf\x86\xe7\240\201\344\270\x8d\xe6\255\243\347\241\256\357\xbc\201"); goto e7IIt; E20LH: if ($admin) { goto rq1LU; } goto x8HhC; tRYap: $name = $request_data["\x6e\141\155\145"]; goto lWMJ1; KJxwK: return $this->error("\xe7\224\xa8\346\210\xb7\345\x90\215\346\210\226\345\xaf\x86\xe7\xa0\x81\344\xb8\x8d\346\255\243\xe7\xa1\256\357\xbc\201"); goto HBDx7; mrxzj: if ($hasher->CheckPassword($pass, $admin["\160\141\x73\163"])) { goto GmD0G; } goto KJxwK; vnmjW: $admin["\x72\x75\x6e\x74\151\155\x65"] = $this->_runtime(); goto Jji5Y; EBtfP: $admin = $this->db->select($this->table)->where("\x73\164\x61\x74\x65\x20\x3d\40\61\40\101\x4e\x44\x20\156\x61\155\x65\x20\x3d\40\x3f", array($name))->get(); goto E20LH; e7IIt: rq1LU: goto ByO_G; ByO_G: ifeiwu\Loader::import("\x65\170\x74\x65\156\x64\57\x50\141\x73\x73\x77\157\162\144\110\x61\x73\x68"); goto Ne3ww; ReHJ5: $json["\154\157\x67\x69\x6e\137\x74\x69\x6d\x65"] = date("\x59\x2d\155\x2d\144\40\x48\x3a\x69"); goto x9WBA; xuwc8: $json["\x6c\x6f\147\151\156\x5f\143\x6f\x75\x6e\x74"] = $json["\x6c\157\x67\151\156\x5f\x63\157\x75\156\x74"] + 1; goto DGz4R; x9WBA: $json["\x6c\157\x67\x69\x6e\137\x69\160"] = $this->_getIP(); goto xuwc8; oe8Wn: $json = json_decode($admin["\x6a\x73\x6f\x6e"], true); goto ReHJ5; Ne3ww: $hasher = new PasswordHash(8, false); goto mrxzj; HBDx7: GmD0G: goto oe8Wn; nGct2: } protected function postPassword($id, $request_data) { goto t_GM4; B9D25: if ($hasher->CheckPassword($old_pass, $admin["\160\x61\163\x73"])) { goto B6Fl9; } goto qHXlO; b2SxT: goto a7bHK; goto EE2vg; qHXlO: return $this->error("\xe6\x97\247\xe5\xaf\x86\xe7\xa0\x81\344\270\215\346\xad\xa3\347\xa1\256\xef\274\x81"); goto yG8gv; GqsQf: $json = json_decode($admin["\152\163\157\156"], true); goto q05ty; EE2vg: xbhUU: goto UIbQD; UIbQD: return $this->success("\xe8\257\267\344\275\xbf\347\224\250\xe6\x96\260\xe5\xaf\206\347\240\x81\xe9\207\215\xe6\x96\xb0\347\231\xbb\345\xbd\225\357\xbc\x81"); goto PrJ0s; t_GM4: $admin = $this->db->select($this->table)->where("\x73\164\x61\x74\x65\40\x3d\x20\x31\40\101\116\x44\40\x69\x64\x20\75\40\77", array($id))->get(); goto BbwJd; JEOXt: return $this->error("\350\xaf\xb7\347\250\x8d\345\200\231\345\x86\x8d\xe8\257\225\56\56\x2e"); goto b2SxT; RkOkg: $hasher = new PasswordHash(8, false); goto B9D25; tVrRL: $pass = $request_data["\160\141\x73\x73"]; goto U0y07; PrJ0s: a7bHK: goto Hpq2r; q05ty: $json["\x70\141\x73\163\137\x74\151\155\x65"] = time(); goto HW0F0; U0y07: ifeiwu\Loader::extend("\x50\141\163\163\x77\157\x72\144\x48\x61\x73\150"); goto RkOkg; yG8gv: B6Fl9: goto GqsQf; HW0F0: $data = array("\160\141\x73\x73" => $hasher->HashPassword($pass), "\152\x73\x6f\156" => json_encode($json)); goto saMn9; saMn9: if ($this->db->update($this->table, $data, array("\x69\x64", "\x3d", $id))->is()) { goto xbhUU; } goto JEOXt; BbwJd: $old_pass = $request_data["\157\x6c\144\160\x61\x73\x73"]; goto tVrRL; Hpq2r: } protected function postPassword2($request_data) { goto e3nZ0; x5Dlr: goto wgLzh; goto y2I3z; e3nZ0: $pass = $request_data["\x70\x61\x73\x73"]; goto aBs0h; dGu68: return $this->success(); goto FXcOc; RDFPb: return $this->error("\351\224\231\xe8\xaf\257\357\274\214\xe8\xaf\xb7\xe7\250\x8d\xe5\x80\x99\345\x86\x8d\350\257\x95\x2e\56\56"); goto x5Dlr; FXcOc: wgLzh: goto OEYSh; N12xi: $hasher = new PasswordHash(8, false); goto Mzdv0; aBs0h: ifeiwu\Loader::extend("\120\x61\163\163\x77\157\x72\144\110\x61\163\150"); goto N12xi; y2I3z: nh4lT: goto dGu68; Mzdv0: if ($this->db->update($this->table, array("\x70\x61\x73\x73" => $hasher->HashPassword($pass)), "\151\144\x20\75\40\61")->is()) { goto nh4lT; } goto RDFPb; OEYSh: } protected function postAdd($request_data) { goto Rddyy; ghxRX: F2BFN: goto aMaSC; xhhT2: $hasher = new PasswordHash(8, false); goto AYEE9; EbKaq: $data["\143\164\x69\x6d\145"] = time(); goto oQKnA; Hvbro: return $this->error("\xe5\xb8\220\345\x8f\xb7\xe5\267\262\345\xad\x98\345\234\250\357\274\x81"); goto Qu_9Q; Qu_9Q: goto ESLCn; goto ghxRX; aMaSC: $this->_log("\x61\x64\x64", array("\x74\151\x74\154\145" => $data["\156\141\155\145"])); goto favJP; P3vE8: $data["\152\x73\x6f\x6e"] = json_encode(array("\154\141\x73\x74\137\x74\x69\155\145" => "\55\x2d\55\x2d\55", "\154\x61\x73\x74\137\x69\x70" => "\x30\x2e\60\x2e\x30\x2e\x30", "\154\x6f\x67\x69\156\137\x63\x6f\165\x6e\x74" => 0)); goto EbKaq; AYEE9: $data["\156\x61\x6d\x65"] = $request_data["\156\141\x6d\x65"]; goto yoxbX; yCKN_: $data["\163\x74\x61\164\x65"] = $request_data["\163\x74\141\x74\145"] ?: 0; goto j8_EF; j8_EF: $data["\x72\142\141\143"] = $request_data["\162\x62\x61\143"] ?: "\156\157\x72\x6d\141\154"; goto P3vE8; yoxbX: $data["\160\x61\x73\x73"] = $hasher->HashPassword($request_data["\160\141\163\163"]); goto yCKN_; Rddyy: ifeiwu\Loader::import("\145\x78\164\145\156\x64\57\x50\x61\x73\163\x77\x6f\x72\144\x48\x61\163\x68"); goto xhhT2; QZPox: ESLCn: goto LdoT4; oQKnA: if ($this->db->insert($this->table, $data)->is()) { goto F2BFN; } goto Hvbro; favJP: return $this->success(); goto QZPox; LdoT4: } protected function postUpdate($id, $request_data) { goto YYuTX; ecumr: $data["\x61\144\144\162\145\163\163"] = $request_data["\x61\144\144\162\145\163\x73"]; goto InrAx; U6my0: $hasher = new PasswordHash(8, false); goto ZjH7k; gFAHX: QgYXF: goto h2SgC; TTHSY: if ($this->db->update($this->table, $data, array("\x69\144", "\75", $id))->is()) { goto qDHrL; } goto lL31N; hs_yO: goto WCH4J; goto FZtWa; bPTIi: V3oaY: goto UXAqt; IJ3tt: $data["\163\145\170"] = $request_data["\163\145\x78"]; goto NbQWE; TOGct: $data["\x73\x74\141\x74\x65"] = $request_data["\x73\x74\141\164\145"]; goto xrPs4; FGQE3: $data["\x72\142\x61\x63"] = $request_data["\x72\142\141\x63"]; goto bPTIi; UXAqt: if (!isset($request_data["\x70\141\163\x73"])) { goto QgYXF; } goto AwWvC; ZjH7k: if (!isset($request_data["\156\141\155\x65"])) { goto JPXJ7; } goto HJWmI; FZtWa: qDHrL: goto OXDyC; eMMXd: $data["\x71\x71"] = $request_data["\161\x71"]; goto IJ3tt; NbQWE: $data["\165\164\151\x6d\145"] = time(); goto TTHSY; dU0Cf: JPXJ7: goto Lll3N; jDKeh: $data["\x69\156\x74\162\157"] = $request_data["\x69\x6e\164\162\x6f"]; goto eMMXd; Lll3N: if (!isset($request_data["\163\x74\x61\164\x65"])) { goto lRoJh; } goto TOGct; xrPs4: lRoJh: goto Llg6z; lL31N: return $this->error("\350\xaf\267\xe7\xa8\215\xe5\200\x99\xe5\206\x8d\350\xaf\225\56\x2e\56"); goto hs_yO; YYuTX: ifeiwu\Loader::import("\145\x78\164\145\x6e\144\x2f\120\141\x73\163\167\157\162\x64\x48\141\163\x68"); goto U6my0; Jmlv7: WCH4J: goto YQDYd; OXDyC: $this->_log("\x75\x70\144\x61\164\145", array("\164\x69\x74\154\x65" => $data["\x6e\141\x6d\145"])); goto fznDY; fznDY: return $this->success(); goto Jmlv7; InrAx: $data["\x6d\x6f\142\x69\154\x65"] = $request_data["\155\x6f\x62\151\154\x65"]; goto jDKeh; HJWmI: $data["\156\x61\155\x65"] = $request_data["\x6e\x61\x6d\145"]; goto dU0Cf; Llg6z: if (!isset($request_data["\x72\142\x61\143"])) { goto V3oaY; } goto FGQE3; AwWvC: $data["\x70\141\163\x73"] = $hasher->HashPassword($request_data["\160\x61\x73\x73"]); goto gFAHX; h2SgC: $data["\x72\x65\x61\154\x6e\141\x6d\145"] = $request_data["\162\x65\141\154\156\141\x6d\x65"]; goto ecumr; YQDYd: } protected function postDelete($request_data) { goto xkVM3; GfqeS: return $this->success(); goto g3DV7; xkVM3: $ids = $request_data["\x69\144"]; goto ueI7X; ueI7X: foreach ($ids as $id) { $this->db->delete($this->table, array("\x69\144", "\75", $id)); AsBkx: } goto esMmD; esMmD: Y_iaU: goto GfqeS; g3DV7: } protected function postToken($request_data) { goto KF1nS; pR8tu: if (!file_put_contents("\x74\157\x6b\x65\x6e\56\160\x68\160", "\x3c\x3f\160\x68\x70\x20\162\145\164\x75\x72\156\40\47{$token}\x27\73")) { goto Y6kLU; } goto edYV8; zucte: return $this->error("\346\262\241\xe6\x9c\x89\xe6\x9d\203\351\231\x90\346\x9b\xb4\xe6\x8d\xa2\345\257\206\351\222\xa5\357\274\x81"); goto VdHyg; edYV8: return $this->success(); goto shOc_; shOc_: Y6kLU: goto nEkzX; nEkzX: c9luM: goto zucte; KF1nS: if (!($token = $request_data["\x74\x6f\153\145\x6e"])) { goto c9luM; } goto pR8tu; VdHyg: } protected function postUpgrade($request_data) { goto WxVwz; h46Pp: unlink("\x2e\56\57\144\141\164\141\x62\141\163\x65\x2e\163\161\x6c"); goto Orzg3; yc2Al: zTpeP: goto vHCJb; WxVwz: $ctx = stream_context_create(array("\150\x74\x74\160" => array("\164\151\155\145\x6f\x75\x74" => 30))); goto qwi62; qwi62: $upgrade_code = file_get_contents("\150\164\x74\x70\72\x2f\x2f\151\146\145\x69\167\165\56\143\157\155\x2f\x67\x65\164\x2f\x75\x70\x67\x72\x61\x64\x65\x3f\x74\75" . time(), 0, $ctx); goto kacN4; eTyO_: curl_setopt($ch, CURLOPT_HEADER, 0); goto NQjCC; qHdU1: $ch = curl_init(); goto jcTgr; DwMd6: curl_close($ch); goto XZNTH; CAhEo: return $this->error("\346\227\240\xe6\xb3\225\345\x86\x99\345\205\xa5\346\226\207\344\xbb\266\357\274\214\350\257\267\346\212\x8a\347\x9b\256\345\275\x95\xe8\xae\xbe\xe7\275\256\344\270\xba\x30\x37\67\x37\345\217\257\345\x86\231\346\x9d\x83\xe9\231\220\357\xbc\201"); goto ZoQE8; NQjCC: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto vzlZ9; GBpvj: return $this->error($json["\155\145\x73\163\x61\147\x65"]); goto hAZwb; GUOm_: $curl_post = array("\x76\151\x65\x77\137\147\151\164" => $request_data["\166\151\145\x77\137\x67\x69\x74"], "\x76\x69\x65\x77\x5f\156\141\155\x65" => $request_data["\166\151\145\x77\137\156\x61\x6d\145"], "\166\x69\x65\x77\137\x76\145\162\163\x69\157\x6e" => $request_data["\166\151\145\167\137\x76\145\x72\163\x69\x6f\156"]); goto qHdU1; ZoQE8: TzI3E: goto vakPz; kacN4: if (!($upgrade_code === false)) { goto zTpeP; } goto hAz1m; Orzg3: return $this->success("\xe8\xbd\xbb\xe7\xbd\x91\xe7\xab\x99\345\215\x87\347\xba\xa7\346\x88\220\345\x8a\x9f\xef\xbc\x81"); goto P7Fuv; qDzJ1: unlink("\x2e\56\57\165\160\144\141\164\145\x2e\160\150\160"); goto h46Pp; vzlZ9: curl_setopt($ch, CURLOPT_POST, 1); goto iY4oF; jcTgr: curl_setopt($ch, CURLOPT_URL, $curl_url . "\x2f\x75\160\x67\x72\x61\x64\145\56\160\150\160"); goto eTyO_; vHCJb: if (file_put_contents("\56\x2e\57\165\x70\147\x72\x61\144\145\56\x70\x68\x70", $upgrade_code)) { goto TzI3E; } goto CAhEo; hAz1m: return $this->error("\346\227\xa0\346\263\x95\350\xaf\xbb\xe5\x8f\226\xe6\226\x87\344\273\266\357\274\x8c\350\xaf\267\xe8\201\x94\xe7\263\xbb\xe9\xa3\x9e\xe5\261\x8b\xe5\xae\xa2\xe6\234\x8d\343\x80\202"); goto yc2Al; seVTG: $json = curl_exec($ch); goto DwMd6; Qd0Ot: unlink("\x2e\56\57\x75\x70\x67\162\141\x64\x65\x2e\160\150\x70"); goto qDzJ1; vakPz: $curl_url = "\x68\164\164\x70\72\57\57" . $_SERVER["\x53\105\122\x56\105\122\x5f\116\101\x4d\105"] . implode("\57", array_slice(explode("\x2f", $_SERVER["\123\x43\x52\111\x50\124\x5f\x4e\101\115\105"]), 0, -2)); goto GUOm_; BnhQ_: if (!($json["\x63\x6f\x64\x65"] == 1)) { goto Xesf2; } goto GBpvj; XZNTH: $json = json_decode($json, true); goto BnhQ_; iY4oF: curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_post); goto seVTG; hAZwb: Xesf2: goto Qd0Ot; P7Fuv: } protected function postPublish() { goto H3RYP; JvGgS: if (is_dir("\x2e\56\x2f\x64\141\x74\x61\57\x63\x61\x63\150\x65\57")) { goto gUzNy; } goto KLKf1; vL5Jp: gUzNy: goto XhMx_; XhMx_: if ($this->_rmdir("\x2e\x2e\57\x64\x61\x74\141\x2f\x63\141\143\150\145\57") !== false) { goto mQp0R; } goto k1Cjz; KLKf1: return $this->success(); goto vL5Jp; x7VA1: QQb64: goto meUwI; CylpC: goto QQb64; goto VJHPP; VJHPP: mQp0R: goto xfV9Q; H3RYP: $this->_saveData("\x73\151\x74\x65", array("\156\141\155\x65" => "\x76\x65\x72\163\x69\157\x6e", "\166\x61\x6c\x75\x65" => time()), array("\x6e\141\155\145", "\75", "\x76\x65\x72\x73\x69\157\x6e")); goto JvGgS; k1Cjz: return $this->error(); goto CylpC; xfV9Q: return $this->success(); goto x7VA1; meUwI: } protected function getFiles($dir, $ext) { goto uggZs; g4ZfZ: $files[] = array("\156\x61\x6d\145" => $filename, "\x63\x6f\156\164\145\156\164" => $file_content); goto o7hOO; Skz93: $handle = opendir($dir); goto fi39P; o7hOO: F_7dw: goto GH4eW; QA97B: if (!(false !== ($file = readdir($handle)))) { goto j5HNG; } goto trLjU; fi39P: if ($handle) { goto v1jta; } goto AqR7w; uggZs: $dir = $dir ? $dir : "\x2e"; goto DEFZT; Dp3NE: goto Yv85l; goto gf0nv; geeN4: yIdw8: goto QA97B; QIhEn: $file_content = file_get_contents($filename); goto g4ZfZ; DEFZT: $ext = $ext ? $ext : "\56\160\150\x70"; goto Skz93; eM9W0: Yv85l: goto JnbU1; yzIgv: return $this->success($files); goto eM9W0; czQ1H: j5HNG: goto o6jTn; gf0nv: v1jta: goto geeN4; o6jTn: closedir($handle); goto yzIgv; ZdYu_: $filename = $dir . "\x2f" . $file; goto khaHp; khaHp: if (!($ext == "\x2a" || strpos($filename, $ext))) { goto F_7dw; } goto QIhEn; AqR7w: return $this->error($dir . "\346\x97\240\xe6\263\x95\346\x89\x93\345\274\200\347\x9b\xae\345\275\x95\357\xbc\x81"); goto Dp3NE; GH4eW: MBPOA: goto OybW1; trLjU: if (!($file != "\x2e" && $file != "\56\56")) { goto MBPOA; } goto ZdYu_; OybW1: goto yIdw8; goto czQ1H; JnbU1: } protected function getFileContent($filename) { goto kLwKD; BgpuF: $content = file_get_contents($filename); goto n516w; ng3ce: L7ntl: goto BgpuF; DOrF7: goto c8lmv; goto ng3ce; ol5HT: c8lmv: goto TWzNe; Shi23: return $this->error($filename . "\40\346\226\x87\344\xbb\xb6\xe4\xb8\215\xe5\xad\x98\345\234\xa8\xef\xbc\x81"); goto DOrF7; kLwKD: if (file_exists($filename)) { goto L7ntl; } goto Shi23; n516w: return $this->success(array("\156\x61\155\x65" => $filename, "\x63\157\x6e\164\x65\156\x74" => $content)); goto ol5HT; TWzNe: } protected function getFileConfig($name) { goto RU0d1; sxETd: if (file_exists($filename)) { goto SpQLN; } goto TRIwd; nLz66: goto pY9De; goto OakUJ; AVRvN: return include $filename; goto WhrVj; WhrVj: pY9De: goto XgfZm; RU0d1: $filename = "\56\56\x2f\143\157\x6e\146\x69\147\x2f" . $name . "\56\x70\x68\160"; goto sxETd; TRIwd: return $this->error($filename . "\x20\xe6\226\207\xe4\273\266\344\270\x8d\xe5\xad\x98\345\234\xa8\357\xbc\x81"); goto nLz66; OakUJ: SpQLN: goto AVRvN; XgfZm: } protected function postFileWrite($request_data) { goto WT6j9; WT6j9: $filename = $request_data["\x66\151\154\x65\156\141\155\x65"]; goto XcinW; XcinW: $content = $request_data["\143\x6f\x6e\x74\x65\156\164"]; goto lHP7t; cJ0r6: goto rVZY4; goto AfjJz; os2V5: return $this->success(); goto CNuK2; UCs0z: chmod($filename, 493); goto J6lA1; lHP7t: if ($filename && $content) { goto jNwtu; } goto jjtao; jjtao: return $this->error(); goto cJ0r6; AfjJz: jNwtu: goto UCs0z; CNuK2: rVZY4: goto e924Q; J6lA1: file_put_contents($filename, $content); goto dNk0T; dNk0T: chmod($filename, 420); goto os2V5; e924Q: } protected function getBackup() { goto tUaKc; PRLCR: $false_count = 0; goto nbF3a; tUs3q: if ($false_count > 0) { goto XMlUg; } goto h1awW; RWn56: RjVQV: goto m_q66; ljQua: $qiniu_backup_types = explode("\54", $qiniu_backup_type); goto l2G99; cXttV: XMlUg: goto pU_SW; emk3T: $smtp_backup_type = $config["\x73\155\164\x70\x5f\142\x61\143\x6b\165\x70\137\x74\x79\x70\x65"]; goto PRLCR; VPUPa: $qiniu_backup_type = $config["\161\x69\x6e\x69\x75\137\142\141\143\153\165\x70\x5f\x74\x79\160\x65"]; goto HNxH6; jdlg0: l99JE: goto VPUPa; h1awW: return $this->success(); goto iJIDr; rzo2Q: A3wWE: goto jq43O; bN1_m: if (!$smtp_backup_type) { goto l99JE; } goto YZzw9; l2G99: foreach ($qiniu_backup_types as $type) { goto okxsQ; okxsQ: $config["\x62\141\x63\x6b\x75\x70\x5f\x74\x79\x70\x65"] = $type; goto xfpkl; GjAEj: Q_W2V: goto UI1em; rc1sj: @unlink("\x74\x65\155\x70\x2f" . $config["\142\141\143\x6b\165\160\137\x6e\141\x6d\x65"]); goto GjAEj; xfpkl: $config["\142\141\x63\153\165\160\x5f\156\x61\155\x65"] = $this->_getPackedFileName($type); goto B8BtI; B8BtI: if ($this->_backupQiniu($config)) { goto dOCOW; } goto jECfe; j1zLf: dOCOW: goto rc1sj; jECfe: $false_count++; goto j1zLf; UI1em: } goto RWn56; iJIDr: goto A3wWE; goto cXttV; m_q66: mS94w: goto tUs3q; NTe8B: foreach ($smtp_backup_types as $type) { goto gq6F_; gq6F_: $config["\142\141\143\153\165\x70\137\164\x79\160\145"] = $type; goto rf0IO; stj9r: I3Zb_: goto PVaVr; rf0IO: $config["\142\141\143\153\165\160\x5f\x6e\141\x6d\x65"] = $this->_getPackedFileName($type); goto T8olX; PVaVr: @unlink("\x74\x65\x6d\x70\57" . $config["\142\x61\143\153\x75\160\137\156\141\x6d\x65"]); goto y0e1U; T8olX: if ($this->_backupEmail($config)) { goto I3Zb_; } goto QQ580; QQ580: $false_count++; goto stj9r; y0e1U: aagQA: goto o53qd; o53qd: } goto FqoyW; tUaKc: set_time_limit(0); goto HBAJW; HBAJW: $config = ifeiwu\Config::get("\x62\x61\143\153\x75\160"); goto emk3T; pU_SW: return $this->error("\346\x9c\x89\xe9\x83\250\345\210\206\xe6\x95\xb0\346\x8d\xae\xe5\xa4\207\344\273\xbd\345\244\261\350\xb4\xa5\xef\xbc\201"); goto rzo2Q; YZzw9: $smtp_backup_types = explode("\54", $smtp_backup_type); goto NTe8B; FqoyW: p3Pl6: goto jdlg0; HNxH6: if (!$qiniu_backup_type) { goto mS94w; } goto ljQua; nbF3a: $this->_mkdir("\164\145\155\x70\x2f"); goto bN1_m; jq43O: } private function _getPackedFileName($type) { goto SpzRl; RZag3: $zip_path = "\164\145\x6d\160\57" . $zip_name; goto C_s4k; Z3Ubu: goto eVQUB; goto ciyt6; jezVS: goto pepJz; goto pu7Wm; KB157: $mb->setName($sql_name); goto hE7cl; ciyt6: EhiMu: goto Sbtnp; pGx3b: if ($type == "\x64\x61\164\x61") { goto B0St7; } goto mDAD2; l5m4R: $bool = $archive->create("\56\56\x2f\x64\x61\164\x61", PCLZIP_OPT_REMOVE_PATH, "\x2e\x2e\57"); goto AuJFv; fyMaz: if ($bool) { goto sbLrw; } goto YHTUs; buqLU: B0St7: goto cwBBP; PNZgS: eVQUB: goto fyMaz; GVXaj: pepJz: goto S5mVO; nxsP4: $name = date("\131\155\x64\x48\x69\x73") . "\x5f" . $type; goto eE3hU; M5Rp4: $mb->setPath(__DIR__); goto KB157; dmHWX: $bool = $archive->create($sql_name); goto mpo7u; YvAwK: rszh2: goto DYoBw; C_s4k: if ($type == "\x64\x62") { goto EhiMu; } goto pGx3b; AuJFv: goto eVQUB; goto YvAwK; NX0QN: $archive = new PclZip($zip_path); goto dmHWX; goPaI: ifeiwu\Loader::import("\145\170\164\145\x6e\144\57\x4d\171\x73\161\x6c\x42\141\x63\153\x75\160"); goto bB0Ub; L9WBZ: FZuXd: goto bDzBZ; YHTUs: return ''; goto jezVS; cwBBP: $archive = new PclZip($zip_path); goto l5m4R; mDAD2: if ($type == "\x63\x6f\144\145") { goto rszh2; } goto Z3Ubu; bB0Ub: $mb = new MysqlBackup(ifeiwu\Config::get("\x64\141\x74\x61\x62\x61\x73\x65")); goto M5Rp4; SpzRl: ifeiwu\Loader::import("\145\x78\x74\145\x6e\144\x2f\120\x63\x6c\132\x69\x70"); goto nxsP4; mpo7u: @unlink($sql_name); goto L9WBZ; FlUSs: $bool = $archive->create("\x2e\x2e\x2f\x61\x73\163\145\164\x2c\56\x2e\x2f\143\x6f\x6e\x74\162\157\154\154\x65\162\x2c\56\x2e\x2f\x63\x6f\156\x66\151\147\x2c\x2e\56\57\151\x66\x65\151\167\165\54\56\x2e\x2f\x76\x69\x65\167\x2c\56\56\57\143\x6f\x6d\155\157\156\56\x70\150\x70\x2c\56\56\x2f\151\156\x64\x65\x78\56\x70\x68\x70\x2c\x2e\56\57\56\x68\x74\141\x63\x63\x65\x73\163\54\56\56\57\x6e\x67\151\156\170\x2e\143\x6f\x6e\x66", PCLZIP_OPT_REMOVE_PATH, "\56\x2e\57"); goto PNZgS; Sbtnp: $sql_name = $name . "\56\163\x71\x6c"; goto goPaI; eE3hU: $zip_name = $name . "\x2e\164\x61\x72\x2e\147\172"; goto RZag3; bDzBZ: goto eVQUB; goto buqLU; hE7cl: $bool = $mb->export(); goto jijM3; DYoBw: $archive = new PclZip($zip_path); goto FlUSs; jijM3: if (!$bool) { goto FZuXd; } goto NX0QN; pu7Wm: sbLrw: goto zRBJf; zRBJf: return $zip_name; goto GVXaj; S5mVO: } private function _backupQiniu($config) { goto Kvbfj; CUmXR: goto Ytkb_; goto ZaARJ; dKaHy: $key = $config["\142\141\143\153\x75\x70\137\x6e\x61\x6d\145"]; goto lZHkA; mItAN: $secretKey = $config["\161\151\156\x69\165\x5f\163\x65\x63\x72\145\x74\x5f\153\145\x79"]; goto mmw2W; Fo18a: $filename = __DIR__ . "\x2f\x74\145\155\160\x2f" . $config["\142\x61\x63\153\x75\160\x5f\x6e\141\x6d\145"]; goto dKaHy; lZHkA: $uploadMgr = new \Qiniu\Storage\UploadManager(); goto yB2pc; Jpdav: $this->_debug($err); goto vjqSI; vjqSI: return false; goto Xpay2; u2LLo: $token = $auth->uploadToken($bucket); goto Fo18a; Nmf0y: if ($err !== null) { goto zFhj6; } goto M2tzT; mmw2W: $auth = new \Qiniu\Auth($accessKey, $secretKey); goto VDF2_; N5i71: $accessKey = $config["\x71\x69\x6e\x69\x75\137\x61\x63\143\x65\163\x73\137\x6b\x65\171"]; goto mItAN; Xpay2: Ytkb_: goto NLpan; M2tzT: return true; goto CUmXR; ZaARJ: zFhj6: goto Jpdav; yB2pc: list($ret, $err) = $uploadMgr->putFile($token, $key, $filename); goto Nmf0y; Kvbfj: require_once VEN_PATH . "\121\x69\x6e\x69\x75\57\x66\165\156\x63\164\151\157\x6e\163\56\160\x68\160"; goto N5i71; VDF2_: $bucket = $config["\161\151\156\151\x75\137\142\x75\143\x6b\145\164\137\x6e\141\155\x65"]; goto u2LLo; NLpan: } private function _backupEmail($config) { goto F9lHr; sqlmC: CY8Gj: goto LVowp; gCvP3: goto QoUUR; goto F6fIQ; It71t: $this->_debug($mailer->ErrorInfo); goto BWd3P; ZI3Ht: $backup_type = $config["\142\x61\x63\x6b\165\x70\x5f\x74\171\160\145"]; goto D_TrU; V7bMu: goto KWMv0; goto h16oI; K8Gk2: if ($backup_type == "\x63\157\144\x65") { goto M6g7B; } goto wrEm2; BwB4k: FzIj0: goto ZyZl_; wrEm2: goto SWKpN; goto Zl4v_; IZqEd: $mailer = new Mailer(array("\163\x6d\x74\x70\x5f\144\145\142\x75\x67" => 0, "\163\155\164\x70\137\x61\x75\x74\150" => true, "\163\x6d\164\x70\137\x68\x6f\x73\x74" => $config["\x73\x6d\164\160\x5f\150\157\x73\x74"], "\x73\155\x74\160\x5f\x70\157\x72\164" => $config["\x73\x6d\164\160\137\x70\157\x72\x74"], "\x73\155\164\x70\x5f\x73\163\x6c" => $config["\163\155\x74\x70\137\x73\163\x6c"], "\x73\155\164\x70\x5f\165\x73\145\x72" => $config["\x73\155\164\160\x5f\x75\163\x65\x72"], "\163\155\x74\160\137\160\x61\163\163" => $config["\x73\x6d\164\x70\137\160\x61\x73\163"], "\x73\155\164\160\x5f\x66\162\x6f\x6d\137\x65\x6d\141\151\x6c" => $config["\x73\155\x74\x70\x5f\x66\162\157\155\x5f\x65\x6d\x61\151\x6c"], "\x73\x6d\164\160\137\x66\162\157\155\137\x6e\x61\x6d\145" => $config["\163\x6d\164\x70\x5f\146\x72\157\155\137\156\x61\155\145"])); goto lEo4J; LhT7I: return true; goto sqlmC; F9lHr: ini_set("\x6d\145\155\157\162\x79\137\154\x69\x6d\151\164", -1); goto VXiRv; Zl4v_: nfD4K: goto CD721; YyBG0: if (!$config["\142\x61\143\x6b\165\160\x5f\x6e\141\155\145"]) { goto FzIj0; } goto Mu24n; G0VE7: yHMJw: goto mJ6M9; I3h1d: $mailer->setTitle("\347\xbd\221\xe7\253\x99\x5b\344\270\273\xe7\250\x8b\xe5\272\217\135\xe5\244\x87\344\xbb\xbd"); goto YyBG0; oGp1l: $mailer->addAttachment($filename); goto V7bMu; uchoX: KKxcg: goto B1mzy; XpLlr: QoUUR: goto mJ2Ya; VXiRv: ifeiwu\Loader::import("\145\x78\164\145\156\144\57\115\x61\x69\x6c\x65\x72"); goto IZqEd; Mu24n: $mailer->setContent(date("\x59\xe5\xb9\xb4\x6d\xe6\x9c\x88\x64\346\227\245\40\x48\xe6\x97\266\151\345\210\x86\x73\xe7\247\222") . "\40\345\244\207\344\273\xbd\xe6\x88\220\345\x8a\x9f\xef\xbc\201", false); goto hwhtd; MTmMQ: goto KKxcg; goto G0VE7; CD721: $mailer->setTitle("\xe7\275\x91\347\xab\x99\133\xe6\225\xb0\xe6\x8d\256\xe5\xba\x93\135\xe5\xa4\207\344\273\xbd"); goto B5_Ey; rxX0r: $mailer->setContent(date("\131\xe5\xb9\xb4\x6d\346\234\x88\144\346\x97\xa5\40\110\xe6\227\xb6\151\345\x88\206\163\xe7\247\x92") . "\40\xe5\244\x87\xe4\xbb\xbd\xe5\244\261\350\xb4\245\357\274\201", false); goto aD18G; ZyZl_: $mailer->setContent(date("\131\345\xb9\xb4\155\346\x9c\210\144\346\x97\245\40\110\xe6\x97\xb6\151\345\x88\x86\163\347\247\x92") . "\40\xe5\244\x87\xe4\xbb\xbd\xe5\xa4\261\xe8\xb4\245\xef\xbc\x81", false); goto ldbZx; nUHFF: if ($backup_type == "\x64\x62") { goto nfD4K; } goto rsFAc; MxB85: $mailer->setContent(date("\131\345\xb9\xb4\155\xe6\x9c\210\x64\346\227\245\x20\110\346\227\xb6\151\xe5\210\206\x73\347\xa7\222") . "\40\345\244\207\344\273\xbd\346\x88\220\345\212\x9f\xef\274\201", false); goto oGp1l; mJ6M9: return true; goto uchoX; BMgJ1: goto LWDei; goto EGenG; B1mzy: SWKpN: goto Y1fjO; ulzqd: return false; goto gCvP3; iP_uM: MkKFM: goto LhT7I; NrvQv: $mailer->setContent(date("\131\xe5\xb9\xb4\x6d\xe6\234\x88\x64\346\227\xa5\40\110\346\227\xb6\151\345\210\x86\x73\xe7\xa7\222") . "\40\345\244\x87\344\xbb\xbd\345\xa4\xb1\350\xb4\245\xef\xbc\x81", false); goto rEaxh; lEo4J: $mailer->addAddress($config["\163\x6d\x74\160\x5f\141\144\x64\x72\145\x73\163"]); goto ZI3Ht; mJ2Ya: goto SWKpN; goto cvLvr; aD18G: LWDei: goto tN5_G; mQVuI: $this->_debug($mailer->ErrorInfo); goto ulzqd; h16oI: JA58t: goto NrvQv; D_TrU: $backup_name = $config["\142\x61\143\153\x75\x70\137\x6e\x61\155\145"]; goto gxs0y; v0D_A: $this->_debug($mailer->ErrorInfo); goto wPxKV; n0Bnc: $mailer->addAttachment($filename); goto BMgJ1; hwhtd: $mailer->addAttachment($filename); goto oUJte; oUJte: goto B3pew; goto BwB4k; rMHvv: M6g7B: goto I3h1d; rAquT: $mailer->setContent(date("\x59\xe5\xb9\xb4\155\346\234\210\144\346\x97\245\40\x48\xe6\227\xb6\x69\xe5\x88\206\x73\xe7\xa7\x92") . "\x20\xe5\244\x87\xe4\273\275\346\210\x90\345\x8a\x9f\357\xbc\x81", false); goto n0Bnc; tN5_G: if ($mailer->send()) { goto CYypT; } goto mQVuI; BSfTr: if ($mailer->send()) { goto yHMJw; } goto It71t; gxs0y: $filename = __DIR__ . "\57\x74\x65\155\x70\57" . $config["\x62\x61\x63\153\165\160\x5f\x6e\141\x6d\x65"]; goto nUHFF; F6fIQ: CYypT: goto y2psd; cvLvr: h13ir: goto NTnlZ; y2psd: return true; goto XpLlr; NTnlZ: $mailer->setTitle("\xe7\xbd\x91\xe7\253\231\x5b\xe8\265\x84\xe6\xba\220\xe5\272\x93\135\345\xa4\x87\344\273\xbd"); goto Hd9a1; EGenG: ydVXu: goto rxX0r; B5_Ey: if (!$config["\x62\141\143\x6b\165\160\137\156\x61\155\x65"]) { goto ydVXu; } goto rAquT; ldbZx: B3pew: goto BSfTr; LVowp: goto SWKpN; goto rMHvv; thGuL: goto CY8Gj; goto iP_uM; Hd9a1: if (!$config["\142\x61\x63\153\165\x70\137\156\x61\x6d\x65"]) { goto JA58t; } goto MxB85; BWd3P: return false; goto MTmMQ; m6pSh: if ($mailer->send()) { goto MkKFM; } goto v0D_A; rEaxh: KWMv0: goto m6pSh; wPxKV: return false; goto thGuL; rsFAc: if ($backup_type == "\x64\x61\x74\x61") { goto h13ir; } goto K8Gk2; Y1fjO: } private function _runtime() { goto a5cYE; ykV6l: $env["\144\x69\x72\x72\x6f\157\164"] = getenv("\104\x4f\103\125\x4d\x45\x4e\x54\x5f\122\117\x4f\124"); goto HfqiN; BL4MW: $env["\x70\150\160"] = "\120\110\120\x20" . substr($php, 0, strpos($php, "\55")); goto ehWKa; YKZSd: $mysql = $this->db->query("\163\x65\154\x65\143\164\40\x76\145\162\163\x69\157\156\x28\51\x3b")->get(0); goto RVUEQ; CaUj9: $env["\x73\171\x73\164\x65\155"] = php_uname("\x73") . "\40" . php_uname("\x72"); goto ykV6l; FiXo9: $php = phpversion(); goto BL4MW; a5cYE: $env = array(); goto CaUj9; dM1Sz: return $env; goto M6MMS; HfqiN: $env["\x61\x70\x61\x63\x68\x65"] = apache_get_version(); goto YKZSd; RVUEQ: $env["\x6d\171\x73\x71\154"] = "\115\171\123\161\154\40" . substr($mysql, 0, strpos($mysql, "\x2d")); goto FiXo9; ehWKa: $env["\x75\160\x6c\157\x61\144"] = ini_get("\x66\151\x6c\145\x5f\x75\160\x6c\x6f\141\144\163") ? ini_get("\165\160\154\x6f\x61\x64\x5f\x6d\141\x78\137\x66\x69\x6c\x65\x73\x69\172\145") : "\104\x69\163\141\142\x6c\145\x64"; goto dM1Sz; M6MMS: } }