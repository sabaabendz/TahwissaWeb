import { motion } from "motion/react";
import { Bus, Plane } from "lucide-react";
import exampleImage from "figma:asset/c88e1b61a6ed0d17fcb07f55cd6e4aab241de909.png";

export function Home() {
  // Path pour la trajectoire de l'avion en haut à droite
  const planePathTopRight = "M 800 50 Q 750 80, 700 120 Q 650 160, 600 200";
  
  // Path pour la trajectoire de l'avion en bas à gauche
  const planePathBottomLeft = "M 50 450 Q 100 420, 150 380 Q 200 340, 250 300";

  return (
    <div className="min-h-screen relative overflow-hidden">
      {/* Background avec l'image fournie */}
      <motion.div
        className="absolute inset-0 bg-cover bg-center"
        style={{ backgroundImage: `url(${exampleImage})` }}
        initial={{ opacity: 0, scale: 1.1 }}
        animate={{ opacity: 1, scale: 1 }}
        transition={{ duration: 1.5 }}
      />

      {/* Overlay nuages animés */}
      <motion.div
        className="absolute inset-0"
        animate={{
          backgroundPosition: ["0% 0%", "100% 100%"],
        }}
        transition={{
          duration: 30,
          repeat: Infinity,
          ease: "linear",
        }}
        style={{
          backgroundImage: "radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%)",
        }}
      />

      <div className="relative z-10">
        {/* Header avec Logo et Bus */}
        <motion.div
          className="flex items-center justify-between p-6"
          initial={{ y: -50, opacity: 0 }}
          animate={{ y: 0, opacity: 1 }}
          transition={{ duration: 0.8 }}
        >
          {/* Logo Tahwissa */}
          <motion.div
            className="flex items-center gap-3 bg-white rounded-2xl px-4 py-3 shadow-lg"
            whileHover={{ scale: 1.05 }}
            animate={{
              boxShadow: [
                "0 10px 30px rgba(59, 130, 246, 0.3)",
                "0 10px 40px rgba(59, 130, 246, 0.5)",
                "0 10px 30px rgba(59, 130, 246, 0.3)",
              ],
            }}
            transition={{ duration: 2, repeat: Infinity }}
          >
            <div className="flex flex-col items-center gap-1">
              <div className="flex gap-0.5">
                <motion.div
                  className="w-2 h-2 rounded-full bg-blue-500"
                  animate={{ scale: [1, 1.3, 1], opacity: [1, 0.5, 1] }}
                  transition={{ duration: 2, repeat: Infinity, delay: 0 }}
                />
                <motion.div
                  className="w-2 h-2 rounded-full bg-blue-400"
                  animate={{ scale: [1, 1.3, 1], opacity: [1, 0.5, 1] }}
                  transition={{ duration: 2, repeat: Infinity, delay: 0.2 }}
                />
                <motion.div
                  className="w-2 h-2 rounded-full bg-blue-300"
                  animate={{ scale: [1, 1.3, 1], opacity: [1, 0.5, 1] }}
                  transition={{ duration: 2, repeat: Infinity, delay: 0.4 }}
                />
              </div>
              <div className="flex gap-0.5">
                <motion.div
                  className="w-2 h-2 rounded-full bg-purple-500"
                  animate={{ scale: [1, 1.3, 1], opacity: [1, 0.5, 1] }}
                  transition={{ duration: 2, repeat: Infinity, delay: 0.6 }}
                />
                <motion.div
                  className="w-2 h-2 rounded-full bg-purple-400"
                  animate={{ scale: [1, 1.3, 1], opacity: [1, 0.5, 1] }}
                  transition={{ duration: 2, repeat: Infinity, delay: 0.8 }}
                />
                <motion.div
                  className="w-2 h-2 rounded-full bg-purple-300"
                  animate={{ scale: [1, 1.3, 1], opacity: [1, 0.5, 1] }}
                  transition={{ duration: 2, repeat: Infinity, delay: 1 }}
                />
              </div>
            </div>
            <span className="text-xl font-bold text-blue-600">Tahwissa</span>
          </motion.div>

          {/* Bus Icon animé */}
          <motion.div
            className="bg-yellow-400 rounded-xl p-3 shadow-lg"
            animate={{
              y: [0, -10, 0],
              rotate: [0, 3, -3, 0],
            }}
            transition={{
              duration: 3,
              repeat: Infinity,
              ease: "easeInOut",
            }}
            whileHover={{ scale: 1.2, rotate: 10 }}
          >
            <Bus className="w-8 h-8 text-gray-800" strokeWidth={2} />
          </motion.div>
        </motion.div>

        {/* Avion en haut à droite avec trajectoire animée */}
        <div className="absolute top-10 right-10">
          <svg width="300" height="250" className="absolute -z-10">
            <motion.path
              d="M 250 20 Q 200 50, 150 90 Q 100 130, 50 170"
              stroke="rgba(255, 255, 255, 0.6)"
              strokeWidth="3"
              fill="none"
              strokeLinecap="round"
              strokeDasharray="10,5"
              initial={{ pathLength: 0, opacity: 0 }}
              animate={{ pathLength: 1, opacity: 1 }}
              transition={{
                pathLength: { duration: 3, repeat: Infinity, ease: "easeInOut" },
                opacity: { duration: 0.5 },
              }}
            />
          </svg>
          
          <motion.div
            animate={{
              x: [-50, 0, -50],
              y: [0, 30, 60],
              rotate: [0, -15, -30],
            }}
            transition={{
              duration: 8,
              repeat: Infinity,
              ease: "easeInOut",
            }}
          >
            <motion.div
              animate={{
                filter: [
                  "drop-shadow(0 0 10px rgba(255,255,255,0.8))",
                  "drop-shadow(0 0 20px rgba(255,255,255,1))",
                  "drop-shadow(0 0 10px rgba(255,255,255,0.8))",
                ],
              }}
              transition={{ duration: 2, repeat: Infinity }}
            >
              <Plane className="w-16 h-16 text-white" strokeWidth={2} />
            </motion.div>
          </motion.div>
        </div>

        {/* Avion en bas à gauche avec trajectoire animée */}
        <div className="absolute bottom-20 left-10">
          <svg width="300" height="250" className="absolute -z-10">
            <motion.path
              d="M 50 200 Q 100 170, 150 130 Q 200 90, 250 50"
              stroke="rgba(255, 255, 255, 0.6)"
              strokeWidth="3"
              fill="none"
              strokeLinecap="round"
              strokeDasharray="10,5"
              initial={{ pathLength: 0, opacity: 0 }}
              animate={{ pathLength: 1, opacity: 1 }}
              transition={{
                pathLength: { duration: 3, repeat: Infinity, ease: "easeInOut", delay: 1.5 },
                opacity: { duration: 0.5, delay: 1.5 },
              }}
            />
          </svg>
          
          <motion.div
            animate={{
              x: [0, 50, 100],
              y: [0, -30, -60],
              rotate: [0, 15, 30],
            }}
            transition={{
              duration: 8,
              repeat: Infinity,
              ease: "easeInOut",
              delay: 1.5,
            }}
          >
            <motion.div
              animate={{
                filter: [
                  "drop-shadow(0 0 10px rgba(255,255,255,0.8))",
                  "drop-shadow(0 0 20px rgba(255,255,255,1))",
                  "drop-shadow(0 0 10px rgba(255,255,255,0.8))",
                ],
              }}
              transition={{ duration: 2, repeat: Infinity, delay: 1 }}
            >
              <Plane className="w-14 h-14 text-white" strokeWidth={2} />
            </motion.div>
          </motion.div>
        </div>

        {/* Grand cadre bleu central */}
        <motion.div
          className="mx-auto my-16 max-w-5xl h-96 relative"
          initial={{ scale: 0.8, opacity: 0 }}
          animate={{ scale: 1, opacity: 1 }}
          transition={{ duration: 1, delay: 0.5 }}
        >
          <motion.div
            className="absolute inset-0 bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 rounded-[40px] shadow-2xl"
            animate={{
              boxShadow: [
                "0 20px 60px rgba(37, 99, 235, 0.4)",
                "0 20px 80px rgba(37, 99, 235, 0.6)",
                "0 20px 60px rgba(37, 99, 235, 0.4)",
              ],
            }}
            transition={{ duration: 3, repeat: Infinity }}
          />
          
          {/* Effets de lumière sur le cadre */}
          <motion.div
            className="absolute inset-0 bg-gradient-to-tr from-white/20 via-transparent to-transparent rounded-[40px]"
            animate={{
              opacity: [0.3, 0.6, 0.3],
            }}
            transition={{ duration: 4, repeat: Infinity }}
          />
          
          {/* Contenu du cadre */}
          <div className="absolute inset-0 flex flex-col items-center justify-center text-white p-12">
            <motion.h1
              className="text-5xl md:text-6xl font-bold mb-6 text-center"
              initial={{ y: 20, opacity: 0 }}
              animate={{ y: 0, opacity: 1 }}
              transition={{ duration: 0.8, delay: 1 }}
            >
              Bienvenue chez Tahwissa
            </motion.h1>
            
            <motion.p
              className="text-xl md:text-2xl text-center mb-8 text-blue-100"
              initial={{ y: 20, opacity: 0 }}
              animate={{ y: 0, opacity: 1 }}
              transition={{ duration: 0.8, delay: 1.2 }}
            >
              Votre compagnon de voyage pour des aventures inoubliables
            </motion.p>
            
            <motion.button
              className="bg-white text-blue-600 px-10 py-4 rounded-full text-lg font-bold shadow-xl hover:shadow-2xl transition-all"
              whileHover={{ scale: 1.1, y: -5 }}
              whileTap={{ scale: 0.95 }}
              initial={{ scale: 0 }}
              animate={{ scale: 1 }}
              transition={{ duration: 0.5, delay: 1.5, type: "spring" }}
            >
              Commencer votre aventure
            </motion.button>
          </div>
        </motion.div>

        {/* Particules flottantes décoratives */}
        {[...Array(8)].map((_, i) => (
          <motion.div
            key={i}
            className="absolute w-2 h-2 bg-white rounded-full"
            style={{
              left: `${Math.random() * 100}%`,
              top: `${Math.random() * 100}%`,
            }}
            animate={{
              y: [0, -30, 0],
              opacity: [0, 1, 0],
              scale: [0, 1.5, 0],
            }}
            transition={{
              duration: 3 + Math.random() * 2,
              repeat: Infinity,
              delay: Math.random() * 3,
            }}
          />
        ))}
      </div>
    </div>
  );
}
