<<<<<<< HEAD
# 🧠 UCONCREATIVE Official Website (ucon_www)
Next-Gen AI Solution Company | Powered by **UCONAI**

## 🌍 Overview
**UCONCREATIVE Inc.**는 UCONAI를 기반으로 고객 맞춤형 AI 서비스를 개발하는 회사입니다.
본 리포는 WordPress + Astra(Child) + Elementor 환경에서 **Neom City 스타일**로 구축되는 공식 웹사이트의 코드/문서 저장소입니다.

## 🏗 Tech Stack

## 📁 Tracked Scope (What we version-control)

> ❌ **Not tracked:** WordPress core, uploads, cache, secrets.

## 🧭 Site Map

## 🎨 Design (Neom City)

## ⚙ Local Dev
1) Laragon 실행 → `http://localhost/ucon`
2) VS Code로 폴더 열기: `C:\laragon\www\ucon`
3) 추천 확장: PHP Intelephense, Prettier, WordPress Snippets, Copilot/ChatGPT
4) 테마 작업: `wp-content/themes/astra-child`
5) 컨텐츠/레이아웃: Elementor

## 🚀 Git Workflow
```bash
git init
git remote add origin https://github.com/<ORG_OR_USER>/ucon_www.git
git add .
git commit -m "chore: init repo with Astra child and guidelines"
git push -u origin main
```

## 🔐 Secrets

## 📦 Deploy (초안)

## ✅ 운영 체크리스트

© 2025 UCONCREATIVE Inc. All rights reserved.
=======
# ucon_www
uconcreative website
>>>>>>> 2775f31c589b5fd64865f9fcb25c2bff7d495581

# 🧠 UCONCREATIVE Official Website (ucon_www)
Next-Gen AI Solution Company | Powered by **UCONAI**

## 🌍 Overview
**UCONCREATIVE Inc.**는 UCONAI를 기반으로 고객 맞춤형 AI 서비스를 개발하는 회사입니다.
본 리포는 WordPress + Astra(Child) + Elementor 환경에서 **Neom City 스타일**로 구축되는 공식 웹사이트의 코드/문서 저장소입니다.

## 🏗 Tech Stack
- WordPress 6.x (CMS)
- Theme: Astra + Child (UCON Style)
- Builder: Elementor(Pro)
- Local: Laragon (Apache, MySQL 8.4)
- Editor: VS Code + GitHub
- AI: ChatGPT/Copilot + AI Engine(Plugin)
- Deploy: DDNS → Cloud (TBD)

## 📁 Tracked Scope (What we version-control)
- `wp-content/themes/astra-child/**`
- `wp-content/plugins/ucon-*/**` (사내용 커스텀 플러그인)
- `infrastructure/**` (vhost, 배포 스크립트, 문서)
- `README.md`, `.gitignore`, `.editorconfig`, `.vscode/*`, `LICENSE`(선택)

> ❌ **Not tracked:** WordPress core, uploads, cache, secrets.

## 🧭 Site Map
- Company(소개/연혁/비전)
- Products(랜툴박스, 공구반장, AI 서포터)
- Core Tech(UCONAI, Physical AI, Solution Framework)
- News(보도/프로젝트/SNS)
- ESG(지속가능/사회공헌/환경)

## 🎨 Design (Neom City)
- Colors: `#0b0b0b`(bg), `#9b59b6`(purple), `#e84393`(neon pink), `#ffffff`(text)
- Fonts: Orbitron/Montserrat(h1~h3), Noto Sans KR or Pretendard(body)
- Mood: Futuristic · Bright · Energetic

## ⚙ Local Dev
1) Laragon 실행 → `http://localhost/ucon`
2) VS Code로 폴더 열기: `C:\laragon\www\ucon`
3) 추천 확장: PHP Intelephense, Prettier, WordPress Snippets, Copilot/ChatGPT
4) 테마 작업: `wp-content/themes/astra-child`
5) 컨텐츠/레이아웃: Elementor

## 🚀 Git Workflow
```bash
git init
git remote add origin https://github.com/<ORG_OR_USER>/ucon_www.git
git add .
git commit -m "chore: init repo with Astra child and guidelines"
git push -u origin main
```
- main: 보호 브랜치, 배포 기준
- dev: 기본 개발 브랜치
- feature/*: 기능 단위

## 🔐 Secrets
- `wp-config.php`, API keys, DB 비밀번호는 **절대 커밋 금지**
- 필요 시 `.env`(gitignored) + `wp-config.php`에서 로드

## 📦 Deploy (초안)
- Dev: `uconcreative.ddns.net/ucon`
- Prod: Cloud/Domain(추가 결정)
- 배포 스크립트/가이드: `infrastructure/`에 정리

## ✅ 운영 체크리스트
- ✅ Astra 테마 + Child 테마 정상 작동
- ✅ Starter Templates(예: Tech Agency) 적용 완료
- ✅ Neom City 색상 (#0b0b0b, #9b59b6, #e84393) 적용
- ✅ Elementor / AI Engine 플러그인 설치 및 테스트
- ✅ .gitignore 정상 작동 (uploads/ 미추적)
- ✅ wp-config.php, API Key, 비밀번호 커밋 금지
- ✅ DDNS 접속 (uconcreative.ddns.net/ucon) 정상 표시
- ✅ SSL(선택) 적용 및 관리자 로그인 테스트

© 2025 UCONCREATIVE Inc. All rights reserved.
# ucon_www
uconcreative website
