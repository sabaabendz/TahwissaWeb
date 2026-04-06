import { Outlet, Link, useLocation } from "react-router";
import { motion, useScroll, useTransform } from "motion/react";
import { Plane, Bus, Calendar, MapPin, Home } from "lucide-react";
import exampleImage from "figma:asset/c88e1b61a6ed0d17fcb07f55cd6e4aab241de909.png";

export function Layout() {
  const location = useLocation();
  const { scrollY } = useScroll();
  
  // Parallax effect pour le background
  const backgroundY = useTransform(scrollY, [0, 500], [0, 150]);
  const backgroundScale = useTransform(scrollY, [0, 500], [1, 1.1]);

  const navItems = [
    { path: "/", icon: Home, label: "Accueil" },
    { path: "/reservations", icon: Calendar, label: "Réservations" },
    { path: "/transport", icon: Bus, label: "Transport" },
    { path: "/evenements", icon: Calendar, label: "Événements" },
    { path: "/points-interet", icon: MapPin, label: "Points d'intérêt" },
  ];

  return (
    <div className="min-h-screen relative overflow-hidden">
      {/* Background animé avec parallaxe et zoom */}
      <motion.div 
        className="absolute inset-0 bg-cover bg-center"
        style={{ 
          backgroundImage: `url(${exampleImage})`,
          y: backgroundY,
          scale: backgroundScale,
        }}
        initial={{ opacity: 0, scale: 1.2 }}
        animate={{ opacity: 1, scale: 1 }}
        transition={{ duration: 1.5, ease: "easeOut" }}
      />
      
      {/* Overlay animé pour créer un effet de profondeur */}
      <motion.div
        className="absolute inset-0 bg-gradient-to-b from-blue-900/20 via-transparent to-blue-900/30"
        animate={{
          opacity: [0.3, 0.5, 0.3],
        }}
        transition={{
          duration: 8,
          repeat: Infinity,
          ease: "easeInOut",
        }}
      />
      
      {/* Effet de lumière animé */}
      <motion.div
        className="absolute inset-0 bg-gradient-radial from-white/10 via-transparent to-transparent"
        animate={{
          scale: [1, 1.3, 1],
          opacity: [0.2, 0.4, 0.2],
        }}
        transition={{
          duration: 6,
          repeat: Infinity,
          ease: "easeInOut",
        }}
      />
      
      {/* Avions animés */}
      <motion.div
        className="absolute top-16 right-10 z-20"
        animate={{
          x: [0, 30, 0],
          y: [0, -20, 0],
          rotate: [0, 5, 0],
        }}
        transition={{
          duration: 8,
          repeat: Infinity,
          ease: "easeInOut",
        }}
      >
        <motion.div
          animate={{
            filter: ["drop-shadow(0 0 8px rgba(255,255,255,0.6))", "drop-shadow(0 0 15px rgba(255,255,255,0.9))", "drop-shadow(0 0 8px rgba(255,255,255,0.6))"],
          }}
          transition={{
            duration: 2,
            repeat: Infinity,
          }}
        >
          <Plane className="text-white w-12 h-12" strokeWidth={1.5} />
        </motion.div>
      </motion.div>

      <motion.div
        className="absolute bottom-32 left-8 z-20"
        animate={{
          x: [0, -30, 0],
          y: [0, 20, 0],
          rotate: [0, -5, 0],
        }}
        transition={{
          duration: 10,
          repeat: Infinity,
          ease: "easeInOut",
          delay: 2,
        }}
      >
        <motion.div
          animate={{
            filter: ["drop-shadow(0 0 8px rgba(255,255,255,0.6))", "drop-shadow(0 0 15px rgba(255,255,255,0.9))", "drop-shadow(0 0 8px rgba(255,255,255,0.6))"],
          }}
          transition={{
            duration: 2,
            repeat: Infinity,
            delay: 1,
          }}
        >
          <Plane className="text-white w-10 h-10" strokeWidth={1.5} />
        </motion.div>
      </motion.div>

      {/* Navigation */}
      <motion.nav
        initial={{ y: -100 }}
        animate={{ y: 0 }}
        className="relative z-10 bg-white/90 backdrop-blur-md shadow-lg"
      >
        <div className="container mx-auto px-6 py-4">
          <div className="flex items-center justify-between">
            <Link to="/" className="flex items-center gap-3">
              <motion.div
                whileHover={{ scale: 1.1, rotate: 5 }}
                animate={{ 
                  boxShadow: [
                    "0 0 20px rgba(59, 130, 246, 0.3)",
                    "0 0 40px rgba(59, 130, 246, 0.6)",
                    "0 0 20px rgba(59, 130, 246, 0.3)",
                  ]
                }}
                transition={{ duration: 3, repeat: Infinity }}
                className="bg-gradient-to-br from-blue-400 to-blue-600 p-3 rounded-2xl"
              >
                <Plane className="w-8 h-8 text-white" />
              </motion.div>
              <motion.span 
                className="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent"
                animate={{
                  backgroundPosition: ["0% 50%", "100% 50%", "0% 50%"],
                }}
                transition={{ duration: 5, repeat: Infinity }}
              >
                Tahwissa
              </motion.span>
            </Link>

            <div className="flex gap-1">
              {navItems.map((item) => {
                const isActive = location.pathname === item.path;
                const Icon = item.icon;
                
                return (
                  <Link key={item.path} to={item.path}>
                    <motion.div
                      whileHover={{ scale: 1.05 }}
                      whileTap={{ scale: 0.95 }}
                      className={`relative px-4 py-2 rounded-xl transition-all ${
                        isActive
                          ? "bg-blue-600 text-white"
                          : "text-gray-700 hover:bg-blue-50"
                      }`}
                    >
                      <div className="flex items-center gap-2">
                        <Icon className="w-5 h-5" />
                        <span className="hidden md:inline font-medium">{item.label}</span>
                      </div>
                      {isActive && (
                        <motion.div
                          layoutId="activeTab"
                          className="absolute inset-0 bg-blue-600 rounded-xl -z-10"
                          transition={{ type: "spring", bounce: 0.2, duration: 0.6 }}
                        />
                      )}
                    </motion.div>
                  </Link>
                );
              })}
            </div>
          </div>
        </div>
      </motion.nav>

      {/* Contenu principal */}
      <div className="relative z-10">
        <Outlet />
      </div>

      {/* Nuages animés décoratifs avec plus d'effets */}
      <motion.div
        className="absolute top-1/4 left-1/4 w-32 h-16 bg-white/20 rounded-full blur-xl"
        animate={{
          x: [0, 100, 0],
          scale: [1, 1.2, 1],
          opacity: [0.3, 0.6, 0.3],
        }}
        transition={{
          duration: 20,
          repeat: Infinity,
          ease: "easeInOut",
        }}
      />
      
      <motion.div
        className="absolute bottom-1/3 right-1/4 w-40 h-20 bg-white/20 rounded-full blur-xl"
        animate={{
          x: [0, -80, 0],
          scale: [1, 1.3, 1],
          opacity: [0.3, 0.6, 0.3],
        }}
        transition={{
          duration: 25,
          repeat: Infinity,
          ease: "easeInOut",
          delay: 5,
        }}
      />
      
      {/* Particules flottantes supplémentaires */}
      <motion.div
        className="absolute top-1/2 right-1/3 w-24 h-24 bg-blue-300/10 rounded-full blur-2xl"
        animate={{
          y: [0, -50, 0],
          x: [0, 30, 0],
          scale: [1, 1.5, 1],
        }}
        transition={{
          duration: 15,
          repeat: Infinity,
          ease: "easeInOut",
          delay: 3,
        }}
      />
      
      <motion.div
        className="absolute top-2/3 left-1/2 w-28 h-28 bg-purple-300/10 rounded-full blur-2xl"
        animate={{
          y: [0, 60, 0],
          x: [0, -40, 0],
          scale: [1, 1.4, 1],
        }}
        transition={{
          duration: 18,
          repeat: Infinity,
          ease: "easeInOut",
          delay: 7,
        }}
      />
    </div>
  );
}