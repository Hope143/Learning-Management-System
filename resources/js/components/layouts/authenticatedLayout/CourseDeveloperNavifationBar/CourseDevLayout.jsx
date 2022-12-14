import React, { useState } from "react";
import SideNavbar from "./SideNavbar";
import TopNavbar from "./TopNavbar";
import { Outlet } from "react-router-dom";

const Layout = () => {
    const [openSidebar, setOpenSidebar] = useState(true);

    return (
        <main>
            <div className="container-lg container-xl container-xxl" id="app">
                <ul className="topbar m-0 list-unstyled">
                    <TopNavbar
                        openSidebar={openSidebar}
                        setOpenSidebar={setOpenSidebar}
                    />
                </ul>
                <div
                    className="px-0 d-xl-flex position-relative d-flex"
                    id="app"
                >
                    <SideNavbar openSidebar={openSidebar} />

                    <main className="home-section mx-3 bg-light rounded shadow">
                        <div className="text">
                            <Outlet />
                        </div>
                    </main>
                </div>
            </div>
        </main>
    );
};

export default Layout;
